<?php
namespace Revered\Equipment\Controller\Revered;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use \Magento\Framework\App\Bootstrap;

class Addequipment extends Action
{
    protected $pageFactory;
   
    public function __construct(PageFactory $pageFactory, Context $context)
    {
        $this->pageFactory = $pageFactory;
      
        parent::__construct($context);
    }

    public function execute()

    {
              echo "form controller";
       
         
        return $this->pageFactory->create();
    }
}   