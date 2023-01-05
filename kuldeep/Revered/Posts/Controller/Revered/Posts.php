<?php
namespace Revered\Posts\Controller\Revered;
use Magento\Framework\App\Action\Action;


class Posts extends Action
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


