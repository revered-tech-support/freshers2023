<?php
namespace Revered\Product\Observer;

use Magento\Framework\Event\ObserverInterface;



class PlaceOrder implements ObserverInterface
{
    
      public function execute(\Magento\Framework\Event\Observer $observer)
    {
     // print_r("My Observer Catched event succssfully !!"); 
      //exit;
      $observer_data = $observer->getData( key:'product');
      $writer = new \Zend_Log_Writer_Stream(BP . '/var/log/product_detail.log');
      $logger = new \Zend_Log();
      $logger->addWriter($writer);
     
        $product = $observer->getProduct();
        echo  "\n";
        $logger->info(message: 'New Product Added ');
        $logger->info('Product Id:- '.print_r($product->getId(),true)); 
        $logger->info('Product sku:- '.print_r($product->getSku(),true));  
        $logger->info('Product Name:- '.print_r($product->getName(),true)); 
     
       exit;
            
           
            
   
    }

}






