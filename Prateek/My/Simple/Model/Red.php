<?php
namespace My\Simple\Model;

use My\Simple\Api\Color ;
use My\Simple\Api\Brightness;

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