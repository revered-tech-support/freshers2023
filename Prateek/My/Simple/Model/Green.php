<?php
namespace My\Simple\Model;

use My\Simple\Api\Color ;

class Green implements Color 
{
  public function getColor()
  {
    return "Green";
  }
}