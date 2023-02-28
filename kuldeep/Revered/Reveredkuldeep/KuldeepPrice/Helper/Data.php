<?php

namespace Reveredkuldeep\KuldeepPrice\Helper;

use Magento\Framework\App\Helper\Context;
use Magento\Customer\Model\SessionFactory;
use Magento\Store\Model\ScopeInterface;
use Magento\Eav\Model\Entity\Attribute\Source\Boolean;

/**
 * Class Data
 * @package Adorncommerce\CallForPrice\Helper
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{

    const CONFIG_PATH_GENERAL_ENABLE = 'reveredkuldeep/general/enable_frontend';

    const CONFIG_PATH_GENERAL_CUSTOMER_GROUP = 'reveredkuldeep/general/customer_group';

  
    /**
     * @var \Magento\Customer\Model\SessionFactory
     */
    private $customerSession;
    /**
     * @var \Magento\Framework\App\Http\Context
     */
    private $httpContext;

    /**
     * @param Context $context
     * @param SessionFactory $customerSession
     * @param \Magento\Framework\App\Http\Context $httpContext
     */
    public function __construct(
        Context $context,
        SessionFactory $customerSession
    )
    {
        $this->customerSession = $customerSession;
        parent::__construct($context);
    }

    /**
     * @param $config_path
     * @return mixed
     */
    public function getConfig($config_path)
    {
        return $this->scopeConfig->getValue(
            $config_path,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    public function isModuleOutputDisabled()
    {
        $configEnabled = $this->scopeConfig->getValue(
            self::CONFIG_PATH_GENERAL_ENABLE,
            ScopeInterface::SCOPE_STORE
        );
        $isOutputEnabled = $this->_moduleManager->isOutputEnabled('Reveredkuldeep_KuldeepPrice');

        return $configEnabled == Boolean::VALUE_NO || !$isOutputEnabled;
    }

    public function isAvailableForCustomer()
    {
        $currentGroupId = $this->customerSession->create()->getCustomer()->getGroupId();
        if(!$this->customerSession->create()->getCustomer()->getData()){
            $currentGroupId = 0;
        }
        $configEnabled = $this->scopeConfig->getValue(
            self::CONFIG_PATH_GENERAL_CUSTOMER_GROUP
        );
        $configSelectedgroup = explode(",", $configEnabled);
        if (in_array($currentGroupId, $configSelectedgroup)) {
            return true;
        }
        return false;

    }

 


    public function isEnable($product)
    {
        $enable = $this->scopeConfig->getValue(
            self::CONFIG_PATH_GENERAL_ENABLE,
            ScopeInterface::SCOPE_STORE
        );
        if ($enable && $product && $this->isAvailableForCustomer()) {
            return true;
        } else {
            return false;
        }
    }

 
}
