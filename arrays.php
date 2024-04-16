<?php

include 'base.php';

echo '<h1> Arrays </h1>';

$arr = array(1, 2, 3, 4);
//var_dump($arr);


$arr2 =[
  'Ahmed', "Omar",
  "Noran", "Omnia",
  "Ali", "Sief"
];

//var_dump($arr2);

$arrsize = count($arr2);

//for($i=0; $i<$arrsize; $i++ ){
//    echo "<h4>$arr2[$i] </h4> ";
//}


//foreach ($arr2 as $elm){
//    echo "{$elm} <br>";
//}




//foreach ($arr2 as $index=>$elm){
//    echo "{$index}=>{$elm} <br>";
//}


# range --=> return array
//
$nums = range(1,10, 2);
//var_dump($nums);


$char_range= range("a", 'z', 3);
//var_dump($char_range);



/************* Associative array ***********/
# unlabeled data
$info = ["noha", 31, "iti"];
echo $info[2]."<br>";
//var_dump($info);

# data with meaning
$info = [
    'firstname'=>"noha",
    "age"=>31,
    "work"=>"iti"
];
//var_dump($info);
# access elements using key
//echo $info["work"]."<br>";


$myarr = [
    "fname"=>"Ahmed",
    "salary"=>"5000",
    "city"=>"october",
    "php",
    "node",
    "odoo",
    72346
];

//var_dump($myarr);
//
//
//foreach($myarr as $key=>$value){
//    echo "{$key}-> {$value}<br>";
//}


####

# construct array from variables

$fname= 'noha';
$lname = 'Shehab';

$infoo = compact("fname", "lname");
var_dump($infoo);




$arr1= ["name"=>"Ahmed", "track"=>"osad"];
$arr2 = ["track"=>"osad", "name"=>"Ahmed"];

//var_dump($arr1==$arr2);
//var_dump($arr1 ===$arr2);


$arr3 = ["salary"=>3999,"city"=>"cairo"];
$arr2 = ["track"=>"opensource", "name"=>"Ahmed",
    "age"=>34];

$arr4=$arr1 + $arr3 + $arr2 ;
//var_dump($arr4);



$myinfo = [
    "name"=>"noha",
    "courses"=>[
        "PHP", "Python","Django", "Laravel"
    ]
];

//var_dump($myinfo["courses"][2]);
# array is mutable datatype
# sort array
$names = array( 'noha', "Fatma", "Dina",
    "Andrew","Shimaa","suliman" );

//sort($names);  # sort array itself
rsort($names);
//var_dump($names);


# sort associative array ?
$myinfo = [
    "name"=>"noha",
    "level"=>"xyz",
    'courses'=>"yyyy"
];


//asort($myinfo); # sort with values
//
//var_dump($myinfo);

# reverse associative array
arsort($myinfo);

# sort with key
//ksort($myinfo);
krsort($myinfo);
var_dump($myinfo);




















































































