<?php


namespace Revered\Attributes\Block\Attributes;


class AbstractElement extends \Magento\Framework\View\Element\Template
{
    /**
     * @return \Magento\Customer\Api\Data\AttributeMetadataInterface $attribute
     */
    public function getAttribute(){
        return parent::getAttribute();
    }

    /**
     * @return string
     */
    public function getAttributeValue(){
        $value = "";
        $data = $this->getFormData();
        $attribute = $this->getAttribute();
        if($attribute){
            if($data instanceof \Magento\Framework\DataObject){
                $value = $data->getData($attribute->getAttributeCode());
            }else{
                $value = $this->getDefaultValue();
            }
        }
        return $value;
    }
}
