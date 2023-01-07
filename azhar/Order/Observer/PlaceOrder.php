<?php
namespace Revered\Order\Observer;

use Magento\Framework\Event\ObserverInterface;




class PlaceOrder implements ObserverInterface
{
    
      public function execute(\Magento\Framework\Event\Observer $observer)
    {
            $order = $observer->getEvent()->getOrder();
            //  $customerId = $order->getCustomerId();
            $order_details= $order->debug();
            $observer_data = $observer->getData('order');
            
            $name  = $order_details['customer_firstname'];
            $lname =$order_details['customer_lastname'];   
            $email = $order_details['customer_email'];
            $amount= $order_details['base_shipping_amount'];
            $subtotal= $order_details['base_subtotal'];
            $code  = $order_details['base_currency_code'];
            
            $writer = new \Zend_Log_Writer_Stream(BP . '/var/log/revered_order_details.log');
            $logger = new \Zend_Log();
            $logger->addWriter($writer);
            echo '<br>';
            $logger->info("New order has been placed");
            $logger->info('First Name:- '.$name);
            $logger->info('Last Name:- '.$lname);
            $logger->info('Email:- '.$email);  
            $logger->info('Amount:- '.$amount);  
            $logger->info('SubTotal:- '.$subtotal);  
            $logger->info('Currency Code:- '.$code);  
            //$logger->info('Customer Email:- '.print_r($customer->getEmail(),true));
            //echo '<br> ';echo '<br> ';     
            return $this;
          exit;
    }

}
