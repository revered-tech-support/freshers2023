<?php 
namespace Take\Dependency\Model;

use Take\Dependency\Api\Size;

class Normal implements Size
{

    public function getSize()
    {
        return "Normal";
    }
}