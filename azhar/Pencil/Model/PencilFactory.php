<?php
namespace Revered\Pencil\Model;

class PencilFactory
{
    private $objectManager;
    public function __construct(\Magento\Framework\ObjectManagerInterface $objectManager)
    {
        $this->objectManager=$objectManager;       
    }
    public function create(array $data){
        return $this->objectManager->create('Revered\Pencil\Api\PencilInterface',$data);
    }
}    