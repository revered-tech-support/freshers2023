<?php


declare(strict_types=1);

namespace ReveredPrateek\Prateekprice\Plugin;

use Magento\Framework\App\Http\Context;
use Magento\Customer\Model\Context as CustomerContext;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;


class IsSalablePlugin
{
    
    protected $scopeConfig;

   
    protected $context;

    const DISABLE_ADD_TO_CART = 'catalog/frontend/catalog_frontend_disable_add_to_cart_for_guest';

   
    public function __construct(
        ScopeConfigInterface $scopeConfig,
        Context $context
    ) {
        $this->scopeConfig = $scopeConfig;
        $this->context = $context;
    }

   
    public function afterIsSalable(): bool
    {
        $scope = ScopeInterface::SCOPE_STORE;

        if ($this->scopeConfig->getValue(self::DISABLE_ADD_TO_CART, $scope)) {
            if ($this->context->getValue(CustomerContext::CONTEXT_AUTH)) {
                return true;
            }
            return false;
        }
        return true;
    }
}
