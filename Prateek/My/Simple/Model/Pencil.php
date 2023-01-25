<?php
namespace My\Simple\Model;

use My\Simple\Api\PencilInterface;
use My\Simple\Api\Color;
use \My\Simple\Api\Size;

class Pencil implements PencilInterface
{
    protected $color;
    protected $size;
public function __construct(Color $color,Size $size)
{
    $this->color = $color;
    $this->size = $size;

}
 function getPencilType()
{
    return "Our pencil has".$this->color->getColor()."Color and ".$this->size->getSize()."size";
}
}







