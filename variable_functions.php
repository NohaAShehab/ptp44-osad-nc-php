<?php

include 'base.php';

echo "<h1> Variables functions </h1> <pre>";

$name = 'ali';
var_dump($name);
echo gettype($name);
# $name=(int)$name;
settype($name, 'int');  # casting
var_dump(gettype($name));


var_dump(is_array($_POST));

var_dump(is_array($name));

var_dump(is_int(34));


class Student{

}

//$s = new Student();
//var_dump(is_object($s));
//
//var_dump(is_scalar($_POST));
//
//$name=  'noha';
//var_dump(is_scalar($name));
//echo"<br>";
//
//var_dump(is_numeric("100iti"));  # false
//var_dump(is_numeric(378264));


###### isset , isempty



# empty --> True ---> falsy values
$emptystring="";
//echo "is_set ".isset($emptystring)."<br>";
//echo "is_empty ".empty($emptystring)."<br>";


# empty --> True ---> falsy values
$zero_var = 0;
//echo "is_set ".isset($zero_var)."<br>";
//echo "is_empty ".empty($zero_var)."<br>";


$null_var = null;
//echo "is_set ".isset($null_var)."<br>";  # false
//echo "is_empty ".empty($null_var)."<br>";


$falsevar = false;
echo "is_set ".isset($falsevar)."<br>";  # true
echo "is_empty ".empty($falsevar)."<br>";  # empty




# all falsy values - -. are empty --empty() --> True

//$name = "ejf";
//
//var_dump(empty($name));
//var_dump(isset($name));
//
//
//
//echo $name ;
//
//unset($name);
//
//var_dump($name);

# variable is not defined
var_dump(isset($abbass));  # false
var_dump(empty($abbass));  # true

echo $abbass;

var_dump($abbass);




$myfun = function (){

    echo "byeeeeeee";
};

var_dump(is_callable($myfun));

$myfun();






$students = [
  "Noran", "Hussien", "Seif", "Omar", "israa", "alaa",
    "noha"
];

print_r($students);


for($i = 0; $i < count($students); $i++){

    echo "{$i}=> {$students[$i]} <br>";
}


foreach ($students as $std){
    echo "{$std} <br>";
}



foreach ($students as $abbass=>$std){
    echo "{$abbass}=>{$std} <br>";
}



for($i = 0; $i < 10; $i++){
    if ($i == 4){
        break;
//        exit;  # stop script
    }
    echo "{$i} <br>";
}

echo "bye";

print("*********************************************");



$info = [
    "name"=>"noha",
    "track"=>"osad"
];

foreach($info as $k=>$val){
    echo "<br> {$k}=>{$val} <br>";
}

































