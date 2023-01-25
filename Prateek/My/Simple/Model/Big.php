<?php
namespace My\Simple\Model;

use My\Simple\Api\Size;

class Big implements Size 
{
    public function getSize() 
    {
        return "Big";
    }
}