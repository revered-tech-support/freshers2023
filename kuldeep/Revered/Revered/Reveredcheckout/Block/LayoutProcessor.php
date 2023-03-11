<?php


namespace Revered\Reveredcheckout\Block;

class LayoutProcessor implements \Magento\Checkout\Block\Checkout\LayoutProcessorInterface
{
    /**
     * Add custom field to checkout layout
     * @param array $jsLayout
     * @return array
     */
    public function process($jsLayout)
    {
        $attributeCode = 'delivery_note';
        $fieldConfiguration = [
            'component' => 'Magento_Ui/js/form/element/textarea',
            'config' => [
                'customScope' => 'shippingAddress.extension_attributes',
                'customEntry' => null,
                'template' => 'ui/form/field',
                'elementTmpl' => 'ui/form/element/textarea',
                'tooltip' => [
                    'description' => 'Here you can leave revered notes',
                ],
            ],
            'dataScope' => 'shippingAddress.extension_attributes' . '.' . $attributeCode,
            'label' => 'Revered Notes',
            'provider' => 'checkoutProvider',
            'sortOrder' => 1000,
            'validation' => [
                'required-entry' => true
            ],
            'options' => [],
            'filterBy' => null,
            'customEntry' => null,
            'visible' => true,
            'value' => ''
        ];

        $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']
        ['children']['shippingAddress']['children']['shipping-address-fieldset']
        
        ['children'][$attributeCode] = $fieldConfiguration;
        
        return $jsLayout;
    }
}

 // $jsLayout['components']['checkout']['children']['steps']['children']['kuldeep-step']
        // ['children']['kuldeep-step']['children']['kuldeepField']
        // ['children'][$attributeCode] = $fieldConfiguration;
        // return $jsLayout;
  

// $jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']
//         ['children']['shippingAddress']['children']['shipping-address-fieldset']
//         ['children'][$attributeCode] = $fieldConfiguration;


// $jsLayout['components']['checkout']['children']['steps']['children']['custom-step']
//         ['component']
