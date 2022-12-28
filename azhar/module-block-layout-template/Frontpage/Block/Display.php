<?php 
namespace Revered\Frontpage\Block;

        class Display extends \Magento\Framework\View\Element\Template 
        {
            public function getMenu() 
            {
                return "home about contact ourteam portfolio";
            }

            public function getHomepage() 
            {
                return "finaly gets my home page";
            }
        }