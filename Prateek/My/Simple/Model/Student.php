<?php
namespace My\Simple\Model;

class Student
{
    private $name;
    private $age ;
    private $scores;

    public function __construct($name = "Rohit",$age =22,
    array $scores=array('maths'=>98,'programming'=>95))
    {
        $this->name = $name;
        $this->age = $age;
        $this->scores =$scores;
    }

}