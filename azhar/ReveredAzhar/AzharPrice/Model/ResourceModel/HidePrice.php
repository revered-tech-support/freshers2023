<?php
namespace ReveredAzhar\AzharPrice\Model\ResourceModel;
/**
 * Class 
 * @package 
 */
class HidePrice extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * @var $_blockGridTable
     */
    protected $_blockGridTable;

    /**
     * 
     * @param \Magento\Framework\Model\ResourceModel\Db\Context $context
     * @param null $resourcePrefix
     */
    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context,
        $resourcePrefix = null
    ) {
        parent::__construct($context, $resourcePrefix);
    }

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('hideprice_request', 'id');
    }

}
