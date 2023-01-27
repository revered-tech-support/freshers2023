<?php 
namespace Take\Dependency\Model;
use Take\Dependency\Api\PencilInterface;
use Take\Dependency\Api\Color;
use Take\Dependency\Api\Size;


class Pencil implements PencilInterface
{
    protected $color;
    protected $size;
    

    public function __construct(Color $color, Size $size){

        $this->color = $color;
        $this->size = $size;
        
    }
    public function getPencilType()
    {
        return "pencil has " . $this->color->getColor()." Color and ".$this->size->getSize()." Size";
    }
}