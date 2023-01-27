<?php 
namespace Take\Dependency\NotMagento;

class BigPencil implements PencilInterface
{
    public function getPencilType()
    {
        return "Big Pencil";
    }
}