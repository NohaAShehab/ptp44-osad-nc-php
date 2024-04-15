<?php

include("base.php");

echo "<h1> DataTypes</h1> <pre>";

/* int to string **/
//$num = 10;
//var_dump($num);
//
//$num= (string)$num;
//var_dump($num);

/* string to int **/
//
//$name = 'Ahmed';
//var_dump($name);
//
//$name = (int)$name;
//var_dump($name);  # convert string to 0
//
//$track = "44os";
//
//$track= (int)$track;
//var_dump($track);



/* variable of variable **/

//$iti = "osad";
//var_dump($iti);
//
//$osad = "Open source application dev";
//
//var_dump($$iti);
//# $$iti  $osad



/************ operators and variables***************/

$num1=10;
$num2=20.3;
# + operaror
$res  = $num1 + $num2;  # adding between numbers
var_dump($res);

$name = "ahmed";
//$res2 = $name + $num2;
//var_dump($res2);  #runtime error // exception

//$res2=  $num2 + $name;
//var_dump($res2);
//echo "hiii";


# contacting strings
$fname = 'ahmed';
$lname = 'ali';

$fullname= $fname.' '.$lname;
var_dump($fullname);

$newstring = $fname." ".(string)10;
var_dump($newstring);


$name = 'mohamed';
$email= "mohamed@gmail.com";
$age = 25;

$info= "{$name} {$email} {$age}";
var_dump($info);

# comparing
$val = 10;

$newval = "10";

var_dump($newval==$val); # compare values
var_dump($newval===$val); # compare values and datatypes



# reference operator

$a = "abc";
$b= $a;  # deep copy # create new address for the object

//var_dump($a);
//var_dump($b);
//
//$a = "updated";
//
//var_dump($a);
//var_dump($b);

# shallow copy --> 2 objects reference the same address
//$a = "abc";
//$b= &$a;  # deep copy # create new address for the object
//
//var_dump($b, $a);
//
//$a = "ewjhgr";
//var_dump($b, $a);


# instance of operator

//$a = 10;
//$a = $b;
//class Student{}
//$s = new Student();
////var_dump(spl_object_hash($s));
//
//var_dump($s instanceof Student);

#@operator
//
//$num = @(10/0);  # inf
//var_dump($num);


# execution operator
$res = `ls -l`;
var_dump($res);































































































