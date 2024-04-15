<?php

echo '
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<div class='container h4'> ";
//echo "<h1>  How to define a variable </h1> <pre>";
//    # variables in php are case sensitive
//    $name = "Noha";
//    var_dump($name);
//
//    $Name= 'Ahmed';
//    var_dump($Name);
//
//    $age = 31;
//    var_dump($age);

    # interpreted loosely dynamically typed lang.
    # interpreter detect datatype in the runtime

#### scoping
echo "<h1> Scoping </h1> <pre>";

//$course = "PHP"; # global variable
//echo "hii ";
//
//var_dump($course); # variable accessed anywhere in the
//# script.

function myfun(){
    $year = 2024;  # local scope
    echo "<h4>Hello from inside the function </h4>";
    var_dump($course);
    # to access global variable from inside function;
    global  $course;
    var_dump($course);
    echo "--------- </br>";
}
//myfun();
//var_dump($year);

# paramter scope

//function printNums ($num1, $num2){
//    # as parameters of functions
//    ## parameter scope === local varaible
//    var_dump($num1, $num2);
//}
//
//printNums(4,5);
//
//var_dump($num1);


# static scope



//function count_calls(){
//    static $counter = 0;
//
//    $counter +=1;
//    var_dump($counter);
//
//}
//
//count_calls();
//count_calls();
//count_calls();
//
//var_dump($counter);


# constant scope

//const track = 'OSAD';
//var_dump(track);
//
//function  printconstant ()
//{
//    echo "<h1>";
//    echo track;
//    echo "</h1>";
////    track = 'jhwg';  # server error
//}
//
//printconstant();

//var_dump($email);

# super global

var_dump($_POST);  # associative array


function populatePOST()
{
    $_POST["name"]="noha";
}

populatePOST();

var_dump($_POST);


//echo $_POST["name"];


echo "noha", "ahmed";

echo $_POST;  # doesn't return with anything

# echo --> output value of variable to the stream
# if the variable can be represented as a string

print("Noha"); # output one variable at time to the stream

# print return with 1

# print array content
echo "<br>";
print_r($_POST);







































































echo "</div>";










