<?php
namespace My\Simple\Model;

use My\Simple\Api\Color;
use My\Simple\Api\Size;
class Book
{
    protected $color;
    protected $size ;
    public function __construct(Color $color, Size $size)
    {
        $this->color= $color;
        $this->size =$size;
    }
}