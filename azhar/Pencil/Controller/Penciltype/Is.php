<?php
namespace Revered\Pencil\Controller\Penciltype;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Revered\Pencil\Api\PencilInterface;
// use Magento\Catlog\Api\ProductRepositoryInterface;    

class Is extends \Magento\Framework\App\Action\Action
{
    protected $pencilinterface;


    public function __construct(
        Context $context, 
        PencilInterface $pencilinterface, 
        )
        
    {
        $this->pencilinterface = $pencilinterface;
        
                             
        parent::__construct($context);
    }

    public function execute()

    {
          
        echo "my controller is running" . "<br>";
        echo $this->pencilinterface->getPencilType();      
        // echo get_class($this->productrepository);
    }
}