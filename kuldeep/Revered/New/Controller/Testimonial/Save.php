<?php
 namespace Revered\New\Controller\Testimonial;
 use Magento\Framework\App\Action\Action;
class Save extends Action
{
     protected $_pageFactory;
     protected $_contactFactory;
 
     public function __construct(
          \Magento\Framework\App\Action\Context $context,
          \Magento\Framework\View\Result\PageFactory $pageFactory,
          \Revered\New\Model\PostFactory $contactFactory
     ){
          $this->_pageFactory = $pageFactory;
          $this->_contactFactory = $contactFactory;
          return parent::__construct($context);
     }
     
     public function execute()
     {
          if ($this->getRequest()->isPost()) {
               $input = $this->getRequest()->getPostValue();
               $postData = $this->_contactFactory->create();
               if (isset($input['editId'])) {
                    $id = $input['editId'];
                    // print_r($id);die;
                    // print_r($input);die;
               } else {
                    $id = 0;
                    // echo "2 else";die;
                    // print_r($id);die;
               }
               if($id != 0){
                    // echo "3 else";die;
                    $postData->load($id);
                    $postData->addData($input);
                    $postData->setId($id);
                    $postData->save();
               }
               else{
                    // print_r($id);die;
                    $postData->setData($input)->save();
               }
               $this->messageManager->addSuccessMessage("Data added successfully!");
               return $this->_redirect('revered/testimonial/bykuldeep');
          }
          return $this->_redirect('revered/testimonial/bykuldeep');
     }
}
    

// public function execute()
//      {
//           if ($this->getRequest()->isPost()) {
//                $input = $this->getRequest()->getPostValue();
//                $postData = $this->_contactFactory->create();
 
//           if(isset($input['editId'])){
//                $id = $input['editId'];
//                print_r($id);die; 
//                // echo "1 else";die;
//                     $postData->load($input['editId']);
//                     $postData->addData($input);
//                     $postData->setId($input['editId']);
//                     $postData->save();
//           }else{
//                // echo "2 else";die;
//                $postData->setData($input)->save();
//           }
 
//               return $this->_redirect('revered/testimonial/bykuldeep');
//           }
//      }
// }



