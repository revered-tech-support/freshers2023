<?php
namespace Revered\About\Controller\Portfolio;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use \Magento\Framework\App\Bootstrap;


class Save extends Action
{
     public $_pageFactory;
     public $_contactFactory;

     public function __construct(
          \Magento\Framework\App\Action\Context $context,
          \Magento\Framework\View\Result\PageFactory $pageFactory,
          \Revered\About\Model\PostFactory $contactFactory
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
                    // echo '1 if';die;
               } else {
                    // echo '1 esle';die;
                    // echo $collection['id'];
                    $id = 0;
                                 }
               if($id = 0){
                    // echo '2 if';die;

                    $postData->load($id);
                    $postData->addData($input);
                    $postData->setId($id);
                    $postData->save();
               }else{
                    // echo '2 esle';die;

                    $postData->setData($input)->save();
               }

               $this->messageManager->addSuccessMessage("Data added successfully!");
               return $this->_redirect('reverd/portfolio/byazhar');
          }
          $this->messageManager->addSuccessMessage("Data not added!");
          return $this->_redirect('reverd/portfolio/byazhar');
          
     }
}

// namespace Revered\About\Controller\Portfolio;

// use Magento\Framework\App\Action\Action;
// use Magento\Framework\App\Action\Context;
// use Magento\Framework\View\Result\PageFactory;
// use \Magento\Framework\App\Bootstrap;

// class Savedata extends Action
// {
//     protected $pageFactory;
   
//     public function __construct(PageFactory $pageFactory, Context $context)
//     {
//         $this->pageFactory = $pageFactory;
      
//         parent::__construct($context);
//     }

//     public function execute()

//     {
//         if ($this->getRequest()->isPost()) {
//             $input = $this->getRequest()->getPostValue();
//             $postData = $this->pageFactory->create();
//             if (isset($input['editId'])) {
//                  $id = $input['editId'];
//             } else {
//                  $id = 0;
//             }
//             if($id != 0){
//                echo 'to run';
//                //   $postData->load($id);
//                //   $postData->addData($input);
//                //   $postData->setId($id);
//                //   $postData->save();
//             }else{echo 'to exect';
//                  $postData->setData($input)->savedata();
                 
//             }
//             $this->messageManager->addSuccessMessage("Data added successfully!");
//             return $this->_redirect('reverd/portfolio/byazhar');
//        }
//        return $this->_redirect('reverd/portfolio/byazhar'); 
     
//         return $this->pageFactory->create();
//     }
// }

// namespace Revered\About\Controller\Portfolio;

//  us4444e Magento\Framework\App\Action\Action;
// use Magento\Framework\App\Action\Context;
// use Magento\Framework\View\Result\PageFactory;

 
// class Savedata extends Action
// {
//      protected $pageFactory;
//  //    protected $_contactFactory;
 
//      public function __construct(PageFactory $pageFactory, Context $context
//      ){
//           $this->pageFactory = $pageFactory;
//    //    $this->_contactFactory = $_contactFactory;
//           return parent::__construct($context);
//      }
 
//      public function execute()
//      {
//           if ($this->getRequest()->isPost()) {
//                $input = $this->getRequest()->getPostValue();
//                $postData = $this->pageFactory->create();
//                if (isset($input['editId'])) {
//                     $id = $input['editId'];
//                } else {
//                     $id = 0;
//                }
//                // echo "run hree";
//                if($id != 0){
//                     $postData->load($id);
//                     $postData->addData($input);
//                     $postData->setId($id);
//                     $postData->save();
//                }else{
//                     $postData->setData($input)->save();
//                }
//                $this->messageManager->addSuccessMessage("Data added successfully!");
//                return $this->_redirect('reverd/portfolio/byazhar');
//           }
//           return $this->_redirect('reverd/portfolio/byazhar');
//           return $this->pageFactory->create();
//      }
// }