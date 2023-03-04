<?php
namespace ReveredPrateek\PrateekPrice\Model\ResourceModel;

class CallForPrice extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
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
        $this->_init('callforprice_request', 'id');
    }

}
