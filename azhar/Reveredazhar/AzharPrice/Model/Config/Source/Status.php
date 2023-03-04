<?php

namespace Reveredazhar\AzharPrice\Model\Config\Source;


class Status implements \Magento\Framework\Data\OptionSourceInterface
{

    protected $_grid;

  
    public function __construct(\Reveredazhar\AzharPrice\Model\CallForPrice $callForPrice)
    {
        $this->_grid = $callForPrice;
    }

    /**
     * Get options
     *
     * @return array
     */
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