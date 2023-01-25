<?php
namespace My\Simple\Model;

use My\Simple\Api\Size;

class Normal implements Size 
{
    public function getSize() 
    {
        return "Normal";
    }
}