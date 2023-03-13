<?php
namespace Revered\Shippingbar\Plugin\Model\Shipping;


class InsertFreeShippingRates
{
    
    private $barDataHelper;

  
    public function __construct(
        \Magento\Checkout\Model\Cart $cart,
        \Revered\Shippingbar\Helper\Data $barDataHelper
    ) {
        $this->cart = $cart;
        $this->barDataHelper = $barDataHelper;
    }


    public function afterCollectRates(\Magento\Shipping\Model\Shipping $subject, $result)
    {
        $isModuleEnable = $this->barDataHelper->getConfig('sparsh_free_shipping_bar/general/enable');
        if ($isModuleEnable) {
            $subTotal = $this->cart->getQuote()->getSubtotal();
            $freeShippingGoal = (float)$this->barDataHelper->getShippingGoal();
            if ($freeShippingGoal) {
                if ($subTotal >= $freeShippingGoal) {
                    $rates = $subject->getResult()->getAllRates();
                    foreach ($rates as $rate) {
                        if ($rate->hasData('price') && $rate->hasData('cost')) {
                            $rate->setData('price', 0);
                            $rate->setData('cost', 0);
                        }
                    }
                }
            }
        }
        return $result;
    }
}
