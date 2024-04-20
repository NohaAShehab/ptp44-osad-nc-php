<?php

require "base.php";

generatetitle("Interfaces", "green");

Interface Transportation {
    public function setModel($model);
    public function setYear($car);
}
class Car implements Transportation {
    public $model, $year;
    public function setModel($model)
    {
        // TODO: Implement setModel() method.
    }
    public function setYear($car)
    {
        // TODO: Implement setYear() method.
    }
}


$c = new Car();
var_dump($c);


