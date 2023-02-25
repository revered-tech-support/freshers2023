<?php

namespace ReveredKuldeep\KuldeepPrice\Plugin;

class HidePriceBox
{

     function afterToHtml(\Magento\Catalog\Pricing\Render\FinalPriceBox $subject, $result)
    {
        // if($subject->getSaleableItem()->gethideprice()==1){
        //     return '';

        if (("hide_price" $subject->getHidePrice() == '1') &&
        (($subject->getHidePrice()['hide_price']) == 1)){

        // return '';
               }else{
            return $result;
        }

    }

    
}






