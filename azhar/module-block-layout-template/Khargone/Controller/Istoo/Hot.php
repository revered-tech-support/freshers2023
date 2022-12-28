<?php
namespace Revered\Khargone\Controller\Istoo;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use \Magento\Framework\App\Bootstrap;



class Hot extends Action
{
    protected $pageFactory;
   
    public function __construct(PageFactory $pageFactory, Context $context)
    {
        $this->pageFactory = $pageFactory;
      
        parent::__construct($context);
    }

    public function execute()

    {
       
       
        echo "in";
       
         echo "out";
        return $this->pageFactory->create();
    }
}