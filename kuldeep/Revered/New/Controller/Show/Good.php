<?php
namespace Revered\New\Controller\Show;
use Magento\Framework\App\Action\Action;
class Good extends Action
{
protected $_pageFactory;
public function __construct(
\Magento\Framework\App\Action\Context $context,
\Magento\Framework\View\Result\PageFactory $pageFactory)
{
$this->_pageFactory = $pageFactory;
parent::__construct($context);
}
public function execute()
{
  // echo "hii";die;
return $this->_pageFactory->create();
}
}

?>







<?php

// namespace Revered\New\Controller\Show;

// use Magento\Framework\App\Action\Action;

// class Good extends Action
// {
    
//    public function execute()
//      {
//          echo 'good morning';
//          exit();
//      }
//}?>
