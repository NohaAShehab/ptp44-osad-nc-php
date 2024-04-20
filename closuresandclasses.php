<?php
require 'base.php';
generatetitle("Classes and closures", "red");

$printproperty = function (){
    echo "<li style='color: purple'>{$this->name} </li>";
};

generatetitle("bind closure to obj", "green");

class Employee{
    public $name;

    function __construct($name){
        $this->name = $name;
    }
}

//$emp = new Employee("John Doe");
//var_dump($emp);
//
//$res=$printproperty->bindTo($emp);
//var_dump($res);
//$res();


class Product{
    public $name;
}

//$p = new Product();
//$p->name = "book";
//$p_closure = $printproperty->bindTo($p);
//$p_closure();
##########################################3

$printproperty = function (){
    echo "<li style='color: purple'>{$this->name} </li>";
};

generatetitle("bind closure to class", "green");

# I need to access private members

class Student{
    private $name;
    function __construct($name){
        $this->name = $name;
    }
}

//$s = new Student("ahmed");
////$obj_closure =$printproperty->bindTo($s,Student::class);
////$obj_closure();
//
//$printproperty->call($s);


generatetitle("define closure inside class", "blue");

class Student_{
    private $name;
    function __construct($name){
        $this->name = $name;
    }

    function display_name(){
        return function (){
            echo $this->name;
        };
    }
}


$s = new Student_("John Doe");
$res=$s->display_name();
$res();
















