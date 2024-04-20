<?php

require 'base.php';

generatetitle("Inheritance", 'blue');
class Person{
    public $name;
    function __construct($name){
        $this->name = $name;
        generatetitle("person is being created", "green", 5);
    }
    public function callingPerson(){
        echo "I am a person";}

    function sayHello(){
        generatetitle("Hello {$this->name}", "orange", 5);

    }
}
class Student extends Person{
    public $level;
    function __construct($name){
        generatetitle("student is being created", "red", 5);
        parent::__construct($name);
    }
    public function callingStudent(){
        echo "I am a student <br>";}

    # overriding
    function sayHello(){
        echo "I am a student <br>";
        parent::sayHello();
    }
}

//$student = new Student("hh");
//var_dump($student instanceof Person);
//$student->callingStudent();
//var_dump($student );
//$student->sayHello();

generatetitle("final_keyword", 'brown');

class Machine{
    public $brand;
    function sayHello(){
        echo "hello I am a machine";
    }
}
class Transportation extends Machine{
    public $type;
    final function canMove(){
        echo "I can move, this function cannot be overriden";
    }
}

//class Car extends Transportation {
//    # Cannot override final method Transportation->canMove()
//    function canMove()
//    {
//        echo "I can move";
//    }
//}

final class Car extends Transportation{


}
$c = new Car();
var_dump($c);
#Class may not inherit from final class
//class KIA extends Car{
//
//}















