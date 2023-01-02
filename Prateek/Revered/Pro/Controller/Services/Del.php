<?php
namespace Revered\Pro\Controller\Services;


 
class Del extends \Magento\Framework\App\Action\Action
{
     protected $_pageFactory;
     protected $_request;
     protected $_postFactory;
 
     public function __construct(
          \Magento\Framework\App\Action\Context $context,
          \Magento\Framework\View\Result\PageFactory $pageFactory,
          \Magento\Framework\App\Request\Http $request,
          \Revered\Pro\Model\PostFactory $postFactory
          )
     {
          $this->_pageFactory = $pageFactory;
          $this->_request = $request;
          $this->_postFactory = $postFactory;
          return parent::__construct($context);
     }
 
     public function execute()
     {
          echo 'php';
               $id = $this->_request->getParam('id');
          $post = $this->_postFactory->create();
          $result = $post->setId($id);
          $result = $result->delete();
          return $this->_redirect('revered/services/byprateek');
     }
}
?>