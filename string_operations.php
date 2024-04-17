<?php

include 'base.php';

function generateTitle($title, $color){
    echo "<h1 style='color:{$color}'>{$title}</h1>";
}

generateTitle("String intro", "blue");


$message = "<h1>Nice to meet you!</h1>";
echo $message;
echo htmlspecialchars($message);

generateTitle("Trim functions", "red");

$message = "           nice to meet you !         ";
//var_dump($message);
//# remove spaces from the beginning and the end of the string
//var_dump(trim($message)); # return new string
//
//function preparestring($input_string){
//        $input_string = htmlspecialchars($input_string);
//        $input_string = trim($input_string);
//        return $input_string;
//
//}
//var_dump(ltrim($message));
## use trim to remove specific chars
//$message = "@ Nice to meet you$ @ @";
//var_dump($message);
//var_dump(trim($message, "$@ "));
//#trim function--> any of these chars --> from the beginning and the end

generateTitle("Formatting", "green");
$bio= "My name is Noha
I works at iti
I lives in cairo.";
#
//echo nl2br($bio);# convert any new line to <br>  # return new string

# printf --> format --> string
$n =  43951789;
//printf('%b', $n);

$name = 65;
//printf('%c', $name);  # accept number --> corresponding char



$txt="iti";
printf("[%'#10s]\n",$txt);


$students = 27;
$course = 'PHP';

$info = "we have %d students in %s course.";
echo sprintf($info, $students, $course);

generateTitle("Upper/lower", "purple");
$fullname = "noha shehab";
//var_dump(strtoupper($fullname));
//var_dump(strtolower($fullname));
//var_dump(ucfirst($fullname));
//var_dump(ucwords($fullname));


generateTitle("format to storage", "orange");

//$message = "I'm Noha, I'm 31 year old"; # '-->part of the string
//
//$res = addslashes($message);
//echo $res."<br>";
//
//echo stripslashes($res);

generateTitle("joining/split string", "red");

$info =['noha', "iti", "osad"];
//echo join(":", $info); # new string
//echo implode("_", $info);

$mymessage = "We love PHP";
//var_dump(explode(' ', $mymessage));


$string = "My name is Noha, I works at ITI";
//
//$mytok = strtok($string, " ");
//var_dump($mytok); # My
////var_dump($string);
//#name is Noha, I works at ITI
//while ($mytok){
//    $mytok = strtok(","); # copy from orignal string
//    echo $mytok."<br>";
//}
//
//var_dump($string);
//echo "hi";
//$tok = strtok("Hello from Ghaza", " ");
//echo "{$tok} <br>";
//
//while ($tok){
//    $tok = strtok(" ");
//    echo "{$tok} <br>";
//}











generateTitle("substring", "black");

//$message = "Hello from Ghaza";
//
////echo substr($message, 1, 6);# substring from the given offset
//
//echo substr($message, -4);

generateTitle("string comparing", "blue");

$str1 = "hello";
$str2= "Hello";
#Binary safe case-insensitive string comparison
var_dump(strcasecmp($str2, $str1));
$str1 = "hello";
$str2= "helloiu";
var_dump(strcmp($str1, $str2));
//var_dump(strcmp($str2, $str1));

generateTitle("string length", "blue");

//var_dump(strlen($message));


generateTitle("string search", "red");
//

$mail = "noha@iti.com";

//var_dump(strstr($mail, "@")); # string --> return
//# part of the string from the found char
//var_dump(strstr($mail, "$")); # string --> return

generateTitle("string hashing", "red");
$name = "noha ooooo";

//var_dump(md5($name));
//var_dump(ord($name)); # Convert the first byte of a string to a value between 0 and 255
# get ascii code of the firstchar.

//var_dump(str_repeat($name, 3));

generateTitle("replace", "yellow");

//var_dump(str_replace('o', "@", $name));
//var_dump(str_shuffle($name));



$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyconsonants = str_replace($vowels, "$",
    "Hello World of PHP");
//echo $onlyconsonants."<br>";

//$input = array('A:_ahmed', 'B:_mohamed', 'C:_itiiti'); ## &&&
//var_dump($input);
//$res = substr_replace($input, "@@@", 3);
////
//var_dump($res);

generateTitle("regular expressions", "green");

//$pattern="/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
$pattern = '/[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Z|a-z]{2,7}/';
$email = "noha@iti.iti@gmail.com";
var_dump(preg_match($pattern, $email));
# preg_match --> return true if first part of the string
# matches the pattern
preg_match_all($pattern, $email,$matches );
var_dump($matches);


### filtervar

var_dump(filter_var($email, FILTER_VALIDATE_EMAIL));
#https://www.php.net/manual/en/filter.filters.validate.php












$password = "iti";
$saved_password= md5($password);

echo "{$saved_password} <br>";
//echo md5($password);

//var_dump(strcmp($saved_password, md5($password)));

var_dump(password_hash("iti", PASSWORD_DEFAULT));
var_dump(password_hash("iti", PASSWORD_DEFAULT));

$pass = password_hash("iti", PASSWORD_DEFAULT);
var_dump(password_verify("iti", $pass));




















































































































