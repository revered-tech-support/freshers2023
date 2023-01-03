<?php

namespace Revered\Vehicle\Controller\Revered;
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
          \Revered\Vehicle\Model\PostFactory $contactFactory
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
                    //print_r($id);die;
               } else {
                    $id = 0;
               }
               if($id = 0){
                    // echo "2 if"; die;
                    $postData->load($id);
                    $postData->addData($input);
                    $postData->setId($id);
                    $postData->save();
               }else{
                    // echo "2 else"; die;
                    $postData->setData($input)->save();
               }

               $this->messageManager->addSuccessMessage("Data added successfully!");
               return $this->_redirect('vehicle/revered/vehicles');
          }
          $this->messageManager->addSuccessMessage("Data not added!");
          return $this->_redirect('vehicle/revered/vehicles');
          
     }
}






