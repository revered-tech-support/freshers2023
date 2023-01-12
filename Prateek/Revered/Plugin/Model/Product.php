<?php
    
    namespace My\Plugin\Model;

    class Product
    {
        public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result) {
            return $result + 2;
            //"revered ".$result; // Adding Apple in product name
        }
    }