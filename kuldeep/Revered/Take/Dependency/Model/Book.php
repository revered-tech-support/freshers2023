<?php
namespace Take\Dependency\Model;

use Take\Dependency\Api\Color;
use Take\Dependency\Api\Size;

class Book
{
    protected $color;
    protected $size;

    public function __construct(Color $color , Size $size)
    {
       $this->color = $color;
       $this->size = $size; 
    }
}