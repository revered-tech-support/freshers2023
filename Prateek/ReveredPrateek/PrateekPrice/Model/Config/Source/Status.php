<?php

namespace ReveredPrateek\PrateekPrice\Model\Config\Source;


class Status implements \Magento\Framework\Data\OptionSourceInterface
{
    
    protected $_grid;

  
    public function __construct(\ReveredPrateek\PrateekPrice\Model\CallForPrice $callForPrice)
    {
        $this->_grid = $callForPrice;
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