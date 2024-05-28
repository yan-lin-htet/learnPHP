<?php
//class
class Yan{
public $first = "Yan";
public $middle = "Lin";
public $last = "Htet";
public function Name()
{
    echo"Yan Lin Htet";
    echo "first name" . $this->first . "middle name" . $this->middle . "last name" . $this->last ;
}
}
//object
$name = new Yan();
$name->Name();


class Lin{
function Name()
{
    echo"Yan Lin Htet";
}
}
$name1 = new Lin();
$name1->Name(); 

class Student 
{
    public $name = "mg mg";

    public $age = 20;

    public $major = "CS";

    public $p = "hello"; //properties

    public function greet() //method
    {
        echo "Hello World";
    }
    public function info()
    {
        echo $this->greet();
        echo $this->name . " -" . $this->age . "-" . $this->major;
    }
}

$student = new Student(); //object instantiation

echo $student->greet();

//declare class 
//object 
//instantiation
//methods 
//properties