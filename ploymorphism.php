<?php

require 'base.php';

generatetitle("Polymorphism", 'red');
generatetitle("dynamic binding overriding", 'red');



interface Animal{

    function makenoise();

}

class Dog implements Animal{
    function makenoise(){
        echo "<h2 style='color: green'>Bark</h2>";
    }
}

class Cat implements Animal{
    function makenoise(){
        echo "<h2 style='color: darkmagenta'>Meow</h2>";
    }
}

class Person{

    Const CAT='cat';
    Const DOG='dog';
    private $petpreference;  # person --> prefer ?
    private $pet;

    /**
     * @param mixed $pet
     */
    public function setPet(Animal $pet): void
    {
        $this->pet = $pet;
    }
    function getPet(): Animal{
        return $this->pet;
    }

    function isCatLover(){
        return $this->petpreference = self::CAT;
    }
    function isDogLover(){
        return $this->petpreference = self::DOG;
    }
}



$p = new Person();
//var_dump($p);

$p->isCatLover();

//var_dump($p);

$p->setPet(new Cat());
//
//$pet=$p->getPet();
////var_dump($pet);
//$pet->makenoise();

//$p->getPet()->makenoise(); # meow
//
//$p2 = new Person();
//$p2->isDogLover();
//$p2->setPet(new Dog());
//$p2->getPet()->makenoise(); # bark

# same function --> do different operations based on caller object



generatetitle("dynamic binding overloading", 'blue');


class Employee{
    function __call(string $name, array $arguments)
    {
        // TODO: Implement __call() method.
//        echo "<h2>New function {$name} is being called with </h2>";
//        print_r($arguments);
        trigger_error("No such function with name={$name}");
    }
    public static function __callStatic($name, $arguments) {
        echo "Calling static method '$name' "
            . implode(', ', $arguments)."<br>";
    }
}

$emp = new Employee();
$emp->test();


$emp->printInfo("Ahmed", "iti", "abc");

Employee::newfunc("df","Ff", "fsf");



