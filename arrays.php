<?php

include 'base.php';

echo '<h1> Arrays </h1>';

$arr = array(1, 2, 3, 4);
//var_dump($arr);s


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
//var_dump($infoo);




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
//var_dump($myinfo);


# user_defined sort

$instructors = [
    ["id"=>1, "name"=>"Ahmed", 'courses'=>["php", "python"]],
    ["id"=>2, "name"=>"ali", "courses"=>['node', 'mongo', 'graph']],
    ["id"=>3, "name"=>"noha", "courses"=>['laravel']]
];


# sort array according to no_of_courses

# sort __ function __ check element ==> courses--> len


function cmp_arr_len($arr1, $arr2){
    $arr1_courses = count($arr1['courses']);
    $arr2_courses = count($arr2['courses']);

    if($arr1_courses == $arr2_courses){
        return 0;
    }

    return ($arr1_courses >  $arr2_courses) ?  1:-1 ;
}
//print_r($instructors);


usort($instructors, "cmp_arr_len");
//print_r($instructors);




echo "<h2 style='color:blue'>Change array order </h2>";

//var_dump($names);

//shuffle($names);
//var_dump($names);  # shuffle array order


$newarr=array_reverse($names);
//var_dump($newarr);


# add element to the array

//var_dump($names);

$names[10]="noha shehab";
//var_dump($names); # associative


//# push element to the array
//array_push($names, "Mohamed");
//var_dump($names);
//
//
//$val=array_pop($names);
//var_dump($val);



echo "<h2 style='color:purple'>Array flip </h2>";

$colors  = [
    1=>"blue",
    2=>"red",
    3=>"green",
    4=>"red",
    5=>["php", "laravel"]
];
//var_dump($colors);

echo "<h2 style='color:red'>after flipping </h2>";

$flipped_array=array_flip($colors);
//var_dump($flipped_array);

echo "<h2 style='color:green'>get file content into array </h2>";

//$data  =file("/etc/passwd");
//var_dump($data);
//
//echo "<table class='table'> <tr> <th> username</th> <th>password</th> <th> group</th></tr>";
//foreach ($data as $line){
//    echo "<tr>";
//    $line_info = explode(":", $line);
//    foreach ($line_info as $field){
//        echo "<td> {$field} </td>";
//    }
//
//    echo "</tr>";
//
//}
//echo "</table>";


echo "<h2 style='color:brown'>Array navigation  </h2>";

$fruits = ['kiwi','banana', 'apple', 'orange'];
$found = in_array('banana', $fruits);
//var_dump($found);
//
//var_dump(current($fruits));
//next($fruits);
//var_dump(current($fruits));
//end($fruits);
//var_dump(current($fruits));
//reset($fruits);
//var_dump(current($fruits));
//prev($fruits);
////var_dump(current($fruits));
///
echo "<h2 style='color:red'>Array Walk  </h2>";

$fruits = ['banana', 'apple',"Kiwi","Orange"];

//function printElment($array_element){
//    echo "<li style='color: purple'> {$array_element}</li>";
//}
//array_walk($fruits, "printElment");
//echo "<br>====</br> ";
//foreach ($fruits as $f){
//    printElment($f);
//}


echo "<h2 style='color:blue'>Array merge  </h2>";
$a=array(5=>"banana",22=>"Kiwi", "abc"=>"noha");
$new_arr = array_merge($a);
//var_dump($new_arr);
//
//$b = [3,35436,3,13,123];
//$new_arr = array_merge($a, $b);
//var_dump($new_arr);

echo "<h2 style='color:blue'>Array chunk  </h2>";

$arr = range('a', 'z');
//var_dump($arr);

$new_arr = array_chunk($arr,3);
//var_dump($new_arr);

echo "<h2 style='color:blue'>Array map  </h2>";


$courses = ['Admin', 'PHP', 'Node'];

function add_hash($elem){
    return "{$elem}#";
}

//var_dump(add_hash("noha"));

$res=array_map("add_hash", $courses); # return new array
//var_dump($res);

echo "<h2 style='color:red'>Array combine  </h2>";


$keys = ["name", 'email', "salary"];

$values = ['noha', "noha@gmail.com", 7236];

$newarr=array_combine($keys, $values);
var_dump($newarr);


# filter
//$my_array = [1,90,2,null,3,'',55,[],5,6,7,8,""];
//$non_empties = array_filter($my_array);
//var_dump($non_empties);


# array intersect key
$array1 = array('blue' => 1, 'red' => 2,
    'green' => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6,
    'yellow' => 7, 'cyan' => 8);

var_dump(array_intersect_key($array1, $array2));


### real example






$arr = array('a' => 123, 'b' => 213, 'c' => 321);

# allowed keys ===> a, b


//var_dump(array_intersect_key($arr, array_flip(['a', 'b'])));



$students=Array("Ali","Ahmed","Mostafa","Omar","Ahmed");
var_dump(array_count_values($students));



$info=["username"=>"Noha","email"=>"nshehab@iti.gov.eg",
    "track"=>"Application"];
extract($info); # variables



echo $username." ".$email." ".$track;


$info = array('coffee', 'brown', 'caffeine');

# set of variables
list($var1, $var2, $var3) = $info;
var_dump($var1, $var2, $var3);






























































































