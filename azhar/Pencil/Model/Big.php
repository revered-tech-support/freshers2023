<?php
namespace Revered\Pencil\Model;

use Revered\Pencil\Api\Size;

class Big implements Size
{
    
    public function getSize()
    {
        return "Big";
    } 
}