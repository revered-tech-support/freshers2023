<?php 
namespace Take\Dependency\Model;

use Take\Dependency\Api\Color;
use Take\Dependency\Api\Brightness;


class Yellow implements Color
{
    protected $brightness;

    public function __construct(Brightness $brightness)
    {
        $this->brightness = $brightness;
    }

    public function getColor()
    {
        return "Yellow";
    }
}