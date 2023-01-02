<?php
 namespace Revered\New\Controller\Testimonial;
use Magento\Framework\App\Action\Action;
class Edit extends Action
{
     protected $_pageFactory;
     protected $_request;
     protected $_coreRegistry;

     public function __construct(
          \Magento\Framework\App\Action\Context $context,
          \Magento\Framework\View\Result\PageFactory $pageFactory,
          \Magento\Framework\App\Request\Http $request,
          \Magento\Framework\Registry $coreRegistry,
       
     ){
          $this->_pageFactory = $pageFactory;
          $this->_request = $request;
          $this->_coreRegistry = $coreRegistry;
          return parent::__construct($context);
        
     }
 
     public function execute()
     {
        $id = $this->_request->getParam('post_id');
     //    echo "kuldeep";
     //    print_r($id);die;
       $this->_coreRegistry->register('editId', $id);
        
          return $this->_pageFactory->create();
        

     }
}

