<?php
namespace ReveredPrateek\Prateekprice\Model\ResourceModel;

class HidePrice extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    
    protected $_blockGridTable;

   
    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context,
        $resourcePrefix = null
    ) {
        parent::__construct($context, $resourcePrefix);
    }

    protected function _construct()
    {
        $this->_init('hideprice_request', 'id');
    }

}
