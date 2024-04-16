<?php

include '../base.php';

echo "<h1> Write data to  file </h1>";

function save_data()
{

    $fileobj = fopen("mycv.txt", "w");
# remove old content

    var_dump($fileobj);

# save data
//
    fwrite($fileobj, "My name is Noha, I works at iti\n");
    fwrite($fileobj, "I am 31 years old" . PHP_EOL);
    fwrite($fileobj, "I lives in Cairo");

    fclose($fileobj);
}

function save_using_fwrite_content($filename,$data){

    file_put_contents($filename, $data);
}

//save_using_fwrite_content("mycv.txt",
//"My name is Hussien, I am 28 years old");



########################33 append data

function append_data($filename, $data){
    $fileobj = fopen($filename, "a");
    fwrite($fileobj, $data);
    fclose($fileobj);


}

append_data("newfile.txt", "My name is Hussien\n
My salary 3000$");
echo "<p class='text-success'>  data=";

readfile("newfile.txt");


# display data







