<?php

require 'base.php';


# create our own datatypes -->
# properties // methods
generatetitle("Classes", "red");
class Student{}

# object from class
$s = new Student();
//var_dump($s);

# add properties to the object in the runtime
$s->name = 'noha';
//var_dump($s);

//var_dump($s->email);


class StudentClass{
    # define properties --> of class
    public $name;
    protected $email;
    private  $grade;
    static $count;
}

//$std = new StudentClass();
//var_dump($std);
//$std->name ='ahmed';
//var_dump($std);
//$std->emaill = 'ahmed@gmail.com';
//var_dump($std);



generatetitle("setters,getters", "blue");

class Student_{
    # define properties --> of class
    public $name;
    protected $email;
    private  $grade;
    static $count;

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }
}

//$std=new Student_();
//var_dump($std);
//$std->setEmail("noha@gmail.com");
//var_dump($std);
//var_dump($std->getEmail());
generatetitle("Constructor", "green");

class Employee{
    public $name;
    protected $email;
    private $salary;

    function __construct($name='', $email='', $salary=0){
//        var_dump($this); # refer to the object
        $this->name = $name;
        $this->email = $email;
        $this->salary = $salary;

    }


}

//$emp = new Employee("noha", "noha", 38);
//
//var_dump($emp);
//
//$emp2 = new Employee();
//var_dump($emp2);

generatetitle("Destructors", "orange");

class Employee_{

    public $name;
    protected $email;
    private $salary;

    function __construct($name='', $email='', $salary=0){
//        var_dump($this); # refer to the object
        $this->name = $name;
        $this->email = $email;
        $this->salary = $salary;

    }

    function __destruct(){
        echo "<h4 style='color:red'>{$this->name} is being removed </h4>";
    }

    function printEmp()
    {
        echo "Employee({$this->name}, {$this->email})<br>";
    }

}

//$emp = new Employee_("abc", 'abc', 344);
//$emp->printEmp();
//echo "fff </br>";
//unset($emp);
//echo "fff </br>";


generatetitle("Static variable", "brown");
class Employee__{
    static $count = 0;
    public $name="ahmed";
    protected $email;
    private $salary;

    function __construct($name='', $email='', $salary=0){
//        var_dump($this); # refer to the object
        $this->name = $name;
        $this->email = $email;
        $this->salary = $salary;
        # increment static variable
        Employee__::$count +=1;
    }

    function __destruct(){
        Employee__::$count -=1;
        echo "<h4 style='color:red'>{$this->name} is being removed </h4>";
    }

    function printEmp()
    {
        echo "Employee({$this->name}, {$this->email})<br>";
    }

}

//$emp = new Employee__("abc", 'abc', 344);
//
//var_dump(Employee__::$count);
//$emp2 = new Employee__("abc1", 'abc', 344);
//
//$emp3 = new Employee__("abc2", 'abc', 344);
//
//echo 'hii';
//unset($emp2);
//var_dump(Employee__::$count);
//
//echo "bye";




generatetitle("OOP / dynamic setter", 'green');

class Product{
    public $name='book';
    protected  $price=10;

    function __set($name, $value)
    {
        generatetitle("property {$name} is being set", 'green', 3);
        // TODO: Implement __set() method.
        $this->$name = $value;
//        trigger_error("You cannot change
//        the object structure");
    }
    function __get($name){
        # is called when property is not defined
        # in the class structure
        generatetitle("property {$name} is being get", 'blue', 3);

        return $this->$name? $this->$name: "notfound";
    }
}

$p = new Product();
//var_dump($p);

# all objects from the same class must have the same properties
//
//$p->instock = true;
//var_dump($p);
//
//$p2 = new Product();
////var_dump($p2->val);
//
//
//var_dump($p->name);
//
//$p->__set("abc", 200);
//
//var_dump($p->__get("abc"));


generatetitle("static methods", "red");
class Engineer{
    public $name;
    const commission =10; # static variable
    static $info = "";
    static $count=0;

    static function displayclassinfo()
    {
        generatetitle("this is employee class", 'blue', 4);
    }

    function __construct()
    {
     self::$count +=1;  # self represent class
    }

}

Engineer::displayclassinfo();
var_dump(Engineer::commission);
var_dump(Engineer::$info);
Engineer::$info="dkjs";
var_dump(Engineer::$info);
$e = new Engineer();
var_dump(Engineer::$count);














































