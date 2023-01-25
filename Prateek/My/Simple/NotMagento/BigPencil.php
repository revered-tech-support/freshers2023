<?php 
namespace My\Simple\NotMagento;

class BigPencil implements PencilInterface
{
    public function getPencilType()
    {
        return "Big pencil";
    }
}