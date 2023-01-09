<?php
namespace Revered\Pencil\Model;

use Revered\Pencil\Api\Size;

class Normal implements Size
{
    
    public function getSize()
    {
        return "normal";
    } 
}