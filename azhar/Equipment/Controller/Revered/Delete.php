<?php
namespace Revered\Equipment\Controller\Revered;
 
class Delete extends \Magento\Framework\App\Action\Action
{
     protected $_pageFactory;
     protected $_request;
     protected $_contactFactory;
 
     public function __construct(
          \Magento\Framework\App\Action\Context $context,
          \Magento\Framework\View\Result\PageFactory $pageFactory,
          \Magento\Framework\App\Request\Http $request,
          \Revered\Equipment\Model\PostFactory $contactFactory
     ){
          $this->_pageFactory = $pageFactory;
          $this->_request = $request;
          $this->_contactFactory = $contactFactory;
          return parent::__construct($context);
     }
 
     public function execute()
     {
          $id = $this->_request->getParam('id');
          $postData = $this->_contactFactory->create();
          $result = $postData->setId($id);
          $result = $result->delete();
          return $this->_redirect('devices/revered/equipment');
     }
}