<?php 
namespace Take\Dependency\Model;

use Take\Dependency\Api\Color;

class Green implements Color
{

    public function getColor()
    {
        return "Green";
    }
}