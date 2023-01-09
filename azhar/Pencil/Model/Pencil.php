<?php
namespace Revered\Pencil\Model;

use Revered\Pencil\Api\PencilInterface;
use Revered\Pencil\Api\Color;
use Revered\Pencil\Api\Size;


class Pencil implements PencilInterface
{
    protected $color;
    protected $size;
    public function __construct(Color $color,Size $size)
    {
        $this->color= $color;
        $this->size= $size;
    }

    public function getPencilType()
    {
        return "<h1>"."Our pencil has " .$this->color->getColor(). " color and " .$this->size->getSize()." Size"."</h1>"  ; 
    }
}