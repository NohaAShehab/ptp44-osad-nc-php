<?php
require 'base.php';

generatetitle("Abstraction", 'blue');


abstract class Base {
    function __construct() {
        echo " <br> <b> This is abstract class constructor ";
    }
// This is abstract function #abstract function cannot contain body
    abstract function printdata();
}

//$a = new Base();

class Derived extends base {
    function __construct() {
        echo "<br> <b> Derived class constructor";
        parent::__construct();
    }
    function printdata() {
        echo "<br> <b> Derived class printdata function";
    }
}

$d = new Derived();
$d->printdata();