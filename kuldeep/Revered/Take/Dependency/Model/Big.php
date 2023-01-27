<?php 
namespace Take\Dependency\Model;

use Take\Dependency\Api\Size;

class Big implements Size
{

    public function getSize()
    {
        return "Big";
    }
}