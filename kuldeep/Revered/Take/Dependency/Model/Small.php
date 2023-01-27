<?php 
namespace Take\Dependency\Model;

use Take\Dependency\Api\Size;

class Small implements Size
{

    public function getSize()
    {
        return "Small";
    }
}