<?php

include '../base.php';
include '../utils.php';

generatetitle("Dates", "blue");

echo date('jS M Y');


# data ==> store ==> timestamp

generatetitle("Timestamps", "orange");

var_dump(mktime(13, 14,
    0, 4, 19, 2024));

generatetitle("Datetime", "green");
$date = new DateTime();
var_dump($date);
var_dump($date->getTimezone());


generatetitle("time", "red");
$time = time(); # timestamp
//var_dump($time);
//var_dump(getdate());
//$timestamp=mktime(13, 14,
//    0, 4, 19, 2024);
//var_dump(getdate($timestamp));
# return array ==> contain time values


generatetitle("validate date", "red");

//var_dump(checkdate(2,29, 2024));


//generatetitle("format time ", "red");
//echo strftime('%A')."<br>";

//echo date("l");


//echo date('l jS \of F Y h:i:s A');

# calculate age
$bd= mktime(5,0,0, 6,17,1992);
$now= time();

$age = $now-$bd;
var_dump($age);

# convert $age to no_of_years

$years = $age/(365*24*60*60);
var_dump($years);









































