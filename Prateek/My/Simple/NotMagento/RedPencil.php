<?php 
namespace My\Simple\NotMagento;

class RedPencil implements PencilInterface
{
    public function getPencilType()
    {
        return "red pencil";
    }
}
