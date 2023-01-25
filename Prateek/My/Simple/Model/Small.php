<?php
namespace My\Simple\Model;

use My\Simple\Api\Size;

class Small implements Size 
{
    public function getSize()
    {
        return "Small";
    }
}