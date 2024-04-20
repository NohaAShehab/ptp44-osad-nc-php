<?php


require 'base.php';

generatetitle("Generators", 'red');

# generate all random values
function randomNumbers($length)
{
    $array = [];
    for($i=0;$i<$length;$i++){
        $array[]=mt_rand(1,1000);
    }
    return $array;
}

//$arr = randomNumbers(15);
//var_dump($arr);

# generators --> generate value when you need it

function generateNumbers($length)
{
    for($i=0;$i<$length;$i++){
        yield mt_rand(1,1000);
    }

}


$gen_obj = generateNumbers(5);
var_dump($gen_obj);

//foreach($gen_obj as $num){
//    echo $num."</br>";
//}

echo $gen_obj->current()."<br>";
$gen_obj->next();
echo $gen_obj->current()."<br>";
$gen_obj->next();
echo $gen_obj->current()."<br>";
$gen_obj->next();
echo $gen_obj->current()."<br>";
$gen_obj->next();
echo $gen_obj->current()."<br>";
$gen_obj->next();
echo"here". $gen_obj->current()."<br>";
var_dump($gen_obj->current());










