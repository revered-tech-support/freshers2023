<?php

namespace ReveredPrateek\Prateekprice\Model\Config\Source;


class Status implements \Magento\Framework\Data\OptionSourceInterface
{
   
    protected $_grid;

   
    public function __construct(\ReveredPrateek\Prateekprice\Model\HidePrice $hidePrice)
    {
        $this->_grid = $hidePrice;
    } 
    public function toOptionArray()
    {
        $options[] = ['label' => '', 'value' => ''];
        $availableOptions = $this->_grid->getAvailableStatuses();
        foreach ($availableOptions as $key => $value) {
            $options[] = [
                'label' => $value,
                'value' => $key,
            ];
        }
        return $options;
    }
}