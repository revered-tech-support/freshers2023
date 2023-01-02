<?php
 
namespace Revered\Pro\Controller\Services;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use \Magento\Framework\App\Bootstrap;
 
class Insert extends Action
{
    public $_pageFactory;

    public function __construct(PageFactory $pageFactory, Context $context)
    {
        $this->_pageFactory = $pageFactory;
		//$this->_postFactory = $postFactory;
		 parent::__construct($context);
    }
     public function execute()
     {
          return $this->_pageFactory->create();
     }
}




