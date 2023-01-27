<?php 
namespace Take\Dependency\Model;

use Take\Dependency\Api\Color;
use Take\Dependency\Api\Brightness;

class Red implements Color
{
    protected $brightness;

    public function __construct(Brightness $brightness)
    {
        $this->brightness = $brightness;
    }

    public function getColor()
    {
        return "Red";
    }
}