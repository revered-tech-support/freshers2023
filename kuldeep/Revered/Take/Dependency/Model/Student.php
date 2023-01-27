<?php
namespace Take\Dependency\Model;

// use Take\Dependency\Api\Color;
// use Take\Dependency\Api\Size;

class Student
{
    protected $name;
    protected $age;
    protected $scores;

    public function __construct($name = "kuldeep", $age = "28",
            array $scores=array ('maths'=>70,'programming'=>80 ))
    {
       $this->name = $name;
       $this->age = $age; 
       $this->scores = $scores;
    }
}