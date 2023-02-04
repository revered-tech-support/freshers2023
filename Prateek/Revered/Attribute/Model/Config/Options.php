<?php
namespace Revered\Attribute\Model\Config;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;
class Options extends AbstractSource 
{



    public function getAllOptions()
    {
        $this->_options = [
            ['label'=>_('Red'),'value'=>'red'],
            ['label'=>_('Blue'),'value'=>'blue'],
            ['label'=>_('Green'),'value'=>'green'],
        ];
        return $this->_options;
    }
}