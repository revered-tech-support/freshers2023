<?php
namespace Revered\Shippingbar\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Context;
use Magento\Store\Model\StoreManagerInterface;
use Magento\Framework\EntityManager\EntityManager;
use Magento\Framework\Model\AbstractModel;


class Entity extends AbstractDb
{
    /**
     * @var StoreManagerInterface
     */
    protected $storeManager;

    /**
     * @var EntityManager
     */
    protected $entityManager;

    /**
     * Store associated with bar entities information map
     *
     * @var array
     */
    protected $_associatedEntitiesMap;

    /**
     * @param Context $context
     * @param StoreManagerInterface $storeManager
     * @param EntityManager $entityManager
     * @param string $connectionName
     */
    public function __construct(
        Context $context,
        StoreManagerInterface $storeManager,
        EntityManager $entityManager,
        $connectionName = null
    ) {
        parent::__construct($context, $connectionName);
        $this->storeManager = $storeManager;
        $this->entityManager = $entityManager;
        $this->_associatedEntitiesMap = $this->getAssociatedEntitiesMap();
    }

    /**
     * Define main table and primary-key.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('sparsh_free_shipping_bar', 'entity_id');
    }

    /**
     * Get store ids to which specified item is assigned
     *
     * @param int $barEntityId
     * @return array
     * @throws \Exception
     */
    public function lookupStoreIds($barEntityId)
    {
        return $this->getAssociatedEntityIds($barEntityId, 'store');
    }

    /**
     * Get customer group ids to which specified item is assigned
     *
     * @param int $barEntityId
     * @return array
     * @throws \Exception
     */
    public function lookupCustomerGroupIds($barEntityId)
    {
        return $this->getAssociatedEntityIds($barEntityId, 'customer_group');
    }

    /**
     * Retrieve single/multiple bar's associated entity Ids by entity type
     *
     * @param int $barEntityId
     * @param string $entityType
     * @return array
     * @throws \Exception
     */
    public function getAssociatedEntityIds($barEntityIds, $entityType, $collectionFlag = 0)
    {
        $connection = $this->getConnection();
        $entityInfo = $this->_getAssociatedEntityInfo($entityType);
        $select = $connection->select()
            ->from(
                ['sfe' => $this->getTable($entityInfo['associations_table'])],
                $collectionFlag ? '*' : [$entityInfo['entity_id_field']]
            )->join(
                ['sf' => $this->getMainTable()],
                'sfe.'.$entityInfo['bar_entity_id_field'].' = sf.'.$entityInfo['bar_entity_id_field'],
                []
            )->where(
                'sf.'.$entityInfo['bar_entity_id_field'].' IN (?)',
                $barEntityIds
            );
        return $collectionFlag ? $connection->fetchAll($select) : $connection->fetchCol($select);
    }

    /**
     * Bind specified bar to entities
     *
     * @param int $barEntityId
     * @param int[]|int|string $newEntityIds
     * @param string $entityType
     * @return $this
     * @throws \Exception
     */
    public function bindBarToEntity($barEntityId, $newEntityIds, $entityType)
    {
        $this->getConnection()->beginTransaction();

        try {
            $entityInfo = $this->_getAssociatedEntityInfo($entityType);
            $oldEntityIds = $this->getAssociatedEntityIds($barEntityId, $entityType);
            if (!is_array($newEntityIds)) {
                $newEntityIds = [(int)$newEntityIds];
            }
            $table = $this->getTable($entityInfo['associations_table']);
            $insert = array_diff($newEntityIds, $oldEntityIds);
            if ($insert) {
                $data = [];
                foreach ($insert as $entityIds) {
                    $data[] = [
                        $entityInfo['bar_entity_id_field'] => (int)$barEntityId,
                        $entityInfo['entity_id_field'] => (int)$entityIds
                    ];
                }
                $this->getConnection()->insertMultiple($table, $data);
            }

            $delete = array_diff($oldEntityIds, $newEntityIds);
            if ($delete) {
                $where = [
                    $entityInfo['bar_entity_id_field'].' = ?' => (int)$barEntityId,
                    $entityInfo['entity_id_field'].' IN (?)' => $delete
                ];
                $this->getConnection()->delete($table, $where);
            }
        } catch (\Exception $e) {
            $this->getConnection()->rollBack();
            throw $e;
        }

        $this->getConnection()->commit();

        return $this;
    }

    /**
     * Map data for associated entities
     *
     * @param string $entityType
     * @return array
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    protected function _getAssociatedEntityInfo($entityType)
    {
        if (isset($this->_associatedEntitiesMap[$entityType])) {
            return $this->_associatedEntitiesMap[$entityType];
        }

        throw new \Magento\Framework\Exception\LocalizedException(
            __('There is no information about associated entity type "%1".', $entityType)
        );
    }

    /**
     * @return array
     * @deprecated 100.1.0
     */
    private function getAssociatedEntitiesMap()
    {
        if (!$this->_associatedEntitiesMap) {
            $this->_associatedEntitiesMap = \Magento\Framework\App\ObjectManager::getInstance()
                ->get(\Revered\Shippingbar\Model\ResourceModel\Entity\AssociatedEntityMap::class)
                ->getData();
        }
        return $this->_associatedEntitiesMap;
    }

    /**
     * {@inheritDoc}
     */
    public function load(AbstractModel $object, $value, $field = null)
    {
        return $this->entityManager->load($object, $value);
    }

    /**
     * @param AbstractModel $object
     * @return $this
     * @throws \Exception
     */
    public function save(AbstractModel $object)
    {
        $this->entityManager->save($object);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function delete(AbstractModel $object)
    {
        $this->entityManager->delete($object);
        return $this;
    }
}
