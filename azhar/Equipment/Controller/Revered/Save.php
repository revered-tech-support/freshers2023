<?php
namespace Revered\Equipment\Controller\Revered;
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
          \Revered\Equipment\Model\PostFactory $contactFactory
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
               return $this->_redirect('devices/revered/equipment');
          }
          $this->messageManager->addSuccessMessage("Data not added!");
          return $this->_redirect('devices/revered/equipment');
          
     }
}
