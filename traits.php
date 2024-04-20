<?php


require 'base.php';

generatetitle("Tratis", 'red');

//interface  Transportation
//{
//    function setmodel();
//
//    function setyear();
//}

# define set of functions --> behaviour implemented  --> or override it

trait printObj {
    # contains different functions
    function printDefault(){
        echo "<h1>Hello {$this->name}</h1>";
    }

    function greetDefault()
    {
        echo "<h2>Welcome {$this->name}</h2>";
    }
}

//class Employee{
//    private $name;
//    function __construct($name){
//        $this->name = $name;
//    }
//    function printDefault(){
//        echo "<h1>Hello {$this->name}</h1>";
//    }
//
//    function greetDefault()
//    {
//        echo "<h2>Welcome {$this->name}</h2>";
//    }
//}
//
//$emp = new Employee("John Doe");
//$emp->printDefault();
//$emp->greetDefault();



generatetitle("using traits", "blue");
class Employee{
    private $name;
    function __construct($name){
        $this->name = $name;
    }
    use printObj;

}

$emp = new Employee("John Doe");
$emp->printDefault();
$emp->greetDefault();



class Student{
    private $name;
    function __construct($name, $email=""){
        $this->name = $name;
        $this->email = $email;
    }
    use printObj;

    # override
    function greetDefault(){
        echo "<h2 style='color: red'>Hello {$this->name}</h2>";
    }
}

$student = new Student("Ahmed");
$student->printDefault();
$student->greetDefault();


# traits can access private members








