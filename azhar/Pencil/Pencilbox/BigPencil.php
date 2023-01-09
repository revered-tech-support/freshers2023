<?php
namespace Revered\Pencil\Pencilbox;

class BigPencil implements Pencilinterface {
   
    public function getPencilType()
    {
        return "<h2>this pencil is big</h2>";
    }
}