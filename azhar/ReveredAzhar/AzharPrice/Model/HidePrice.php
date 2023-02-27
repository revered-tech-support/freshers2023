<?php
namespace ReveredAzhar\AzharPrice\Model;

use Magento\Framework\DataObject\IdentityInterface;

/**
 * Class 
 * @package 
 */
class HidePrice extends \Magento\Framework\Model\AbstractModel implements IdentityInterface
{
    const STATUS_NEW = 1;

    const STATUS_COMPLETED = 2;
    /**
     * CMS page cache tag
     */
    const CACHE_TAG = 'hideprice';

    /**
     * @var string
     */
    protected $_cacheTag = 'hideprice';
    /**
     * Prefix of model events names
     *
     * @var string
     */
    protected $_eventPrefix = 'hideprice';


    function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null,
        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
        array $data = [])
    {
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('ReveredAzhar\AzharPrice\Model\ResourceModel\HidePrice');
    }

    /**
     * @return array
     */
    public function getAvailableStatuses()
    {
        return [self::STATUS_NEW => __('New'), self::STATUS_COMPLETED => __('Completed')];
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

  


   
}
