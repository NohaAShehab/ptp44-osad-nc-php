<?php

require 'base.php';

generatetitle("Clonning", 'red');

class Student
{
    public $name;
}

$s1= new Student();
$s1->name = "John";
var_dump($s1);

$s2= $s1; # shallow copy --> refers to the same add.
var_dump($s2);

generatetitle("chaning vallues", 'blue');
//$s2->name = "noha";
//var_dump($s2);
//var_dump($s1);
generatetitle("clone", 'green');

//$s3= clone $s1;
//var_dump($s3);
//$s1->name = 'updated';
//var_dump($s3);
//var_dump($s1);

generatetitle("control cloning process", 'red');

class Employee{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }
    function __clone(): void
    {
        echo "<h1>cloning now </h1>";
        // TODO: Implement __clone() method.
        $this->copy = true;

    }
}

$emp = new Employee("Ahmed");
var_dump($emp);

$emp2 = clone $emp;
var_dump($emp2);






