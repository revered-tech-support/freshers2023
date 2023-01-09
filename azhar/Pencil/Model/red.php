<?php
namespace Revered\Pencil\Model;

use Revered\Pencil\Api\Color;

class Red implements Color {
    public function getColor()
    {
        return "Red";
    }
}