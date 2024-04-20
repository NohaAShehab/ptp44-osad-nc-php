<?php
require 'base.php';
require 'connect_pdo.php';

generatetitle("Reflection Classes ", 'red');

$pdo = connect_to_db_pdo();

var_dump($pdo);



## to get information about class defined in the memory

$reflection = new ReflectionClass('PDO');
var_dump($reflection);

$properties = $reflection->getProperties();
var_dump($properties);



class Student{
    public $name;
    public $age;
    public $salary;
}

$sd_reflection = new ReflectionClass('Student');
$std_properties = $sd_reflection->getProperties();
//var_dump($std_properties);
foreach ($std_properties as $property) {
    echo "{$property->getName()} <br>";
}

### get methods
generatetitle("PDO Methods", "red" );

$pdo_methods = $reflection->getMethods();
foreach ($pdo_methods as $method) {
    echo "{$method->getName()} <br>";
}
















