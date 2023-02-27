<?php

namespace ReveredAzhar\AzharPrice\Model\Config\Source;

/**
 * Class Status
 * @package 
 */
class Status implements \Magento\Framework\Data\OptionSourceInterface
{
  
    public function __construct(\ReveredAzhar\AzharPrice\Model\HidePrice $hidePrice)
    {
        $this->_grid = $hidePrice;
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