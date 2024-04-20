<?php

include("base.php");

generatetitle('Functions', "red");

# php support functions hoisting
//var_dump(sumnum(3,4));
function sumnum($x=4, $y=5) # local
{
 $res = $x + $y;
 return $res;
}
//var_dump(sumnum());

function printvar(int $var)
{
    echo "<h1>$var</h1>";
}
//
//printvar("df");
//printvar(34.4);


function ask_for_values(...$values){
    var_dump($values);
}
//ask_for_values();
//ask_for_values(34,5,3,'ddd',$name='test');

generatetitle("Call by reference/ value", 'blue');

function incrementFun($value, $amount = 1) {
    $value = $value +$amount;
    echo "from inside the function {$value}<br>";

}

$num = 11;
//incrementFun($num);
//var_dump($num);
function incrementFunbyadd(&$value, $amount = 1) {
    $value = $value +$amount;
    echo "from inside the function {$value}<br>";

}
//incrementFunbyadd($num);
//var_dump($num);


generatetitle("Closure", 'green');

$printVariable= function () {
    echo "closure is called <br>";
};

//var_dump(is_callable($printVariable));
//
//var_dump($printVariable); # object from closure


function sumnums(int $num1,int $num2){
    $res = $num1 + $num2;
    echo "<h2>{$res}</h2>";
    return function (){
        echo "Done <br>";
    };
}

//$result = sumnums(3, 3);
////var_dump($result);
//$result();






//$printClosure= function ($var){
//    echo "<h1>{$var}</h1>";
//};

//$printClosure("abc");

generatetitle("Closure and external variables", 'green');

$quantity = 5;
$increment_value= function($variable)use($quantity){
    $res = $variable + $quantity;
    echo "<h2>{$res}</h2>";
};
$increment_value(10);































