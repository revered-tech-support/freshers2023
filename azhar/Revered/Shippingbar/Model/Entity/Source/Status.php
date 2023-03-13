<?php
namespace Revered\Shippingbar\Model\Entity\Source;


class Status implements \Magento\Framework\Data\OptionSourceInterface
{
    const STATUS_ENABLED = 1;

    const STATUS_DISABLED = 0;

 
    protected $entity;

  
    public function __construct(
        \Revered\Shippingbar\Model\Entity $entity
    ) {
        $this->entity = $entity;
    }

    /**
     * Return array of options as value-label pairs
     *
     * @return array
     */
    public function toOptionArray()
    {
        $options = [];
        foreach (self::getOptionArray() as $index => $value) {
            $options[] = ['value' => $index, 'label' => $value];
        }
        return $options;
    }

    /**
     * Retrieve option array
     *
     * @return array
     */
    public function getOptionArray()
    {
        return [self::STATUS_ENABLED => __('Enabled'), self::STATUS_DISABLED => __('Disabled')];
    }
}
