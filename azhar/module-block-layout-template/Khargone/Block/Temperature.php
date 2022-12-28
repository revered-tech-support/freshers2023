<?php 
namespace Revered\Khargone\Block;

class Temperature extends \Magento\Framework\View\Element\Template 
{
    public function getTemp() 
    {
        return "this is khargone and it is too hot";
    }

    public function helloWorld() 
    {
        return "<h1>hello world</h1>";
    }
    public function getMsg(){
        return "temp";
    }
}