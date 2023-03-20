<?php


namespace Revered\Attributes\Block\Attributes;


class Multiselect extends AbstractElement
{

    /**
     * Path to template file in theme.
     *
     * @var string
     */
    protected $_template = "Revered_Attributes::attributes/multiselect.phtml";

    /**
     * @return array
     */
    public function getAttributeValue(){
        return explode(",", parent::getAttributeValue());
    }
}
