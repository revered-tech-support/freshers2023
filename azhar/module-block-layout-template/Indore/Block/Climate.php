<?php 
namespace Revered\Indore\Block;

class Climate extends \Magento\Framework\View\Element\Template 
{
    public function getTemp() 
    {
        return "this is indore and it is cool today";
    }

    public function helloIndore() 
    {
        return "<h1>hello indore !!</h1>";
    }
    
}