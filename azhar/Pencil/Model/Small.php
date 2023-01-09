<?php
namespace Revered\Pencil\Model;

use Revered\Pencil\Api\Size;

class Size implements Size
{
    public function getSize()
    {
        return "small";
    }
}