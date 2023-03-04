<?php
namespace Reveredazhar\AzharPrice\Model\Config\Source;

use \Magento\Customer\Model\ResourceModel\Group\Collection;


class CustomerGroup implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @var Collection
     */
    protected $_customerGroup;

    protected $_options;

    public function __construct( Collection $customerGroup ) {
        $this->_customerGroup = $customerGroup;
    }

    public function toOptionArray() {
        if (!$this->_options) {
            $this->_options = $this->_customerGroup->toOptionArray();
        }
        return $this->_options;
    }
}