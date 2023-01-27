<?php 
namespace Take\Dependency\NotMagento;

class RedPencil implements PencilInterface
{
    public function getPencilType()
    {
        return "red pencil";
    }
}
