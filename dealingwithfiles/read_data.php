<?php

include '../base.php';

echo "<h1> Reading data from file </h1>";


$fileobj=fopen("students.txt", "r");
# if file not exists --> warning


//if ($fileobj){
    # read file content
//    var_dump($fileobj);  # resource --> get data /close file
//    # get filesize
//    $file_size =filesize("students.txt");
//    $data = fread($fileobj, $file_size);  # read content into one string
//    var_dump($data);

    # read file line by line ??


//    while (!feof($fileobj)){
//        $line = fgets($fileobj);  # string
////        var_dump($line);
//        echo $line;
//    }
## write data in a table
//    echo "<table class='table'><tr> <th> Name</th> <th>Salary</th></tr>";
//
//    while (!feof($fileobj)){
//        $line = fgetcsv($fileobj, 100,":");  # string
////        var_dump($line);
//        echo "<tr>";
//        foreach ($line as $value){
//            echo "<td>$value</td>";
//        }
//        echo "</tr>";
//
////        echo $line;
//    }
//    echo "</table>";
//    fclose($fileobj);
//
//}else{
//    echo "<h3 class='text-danger'> File not found </h3>";
//}

# read file into one step



function readfile_onstep($filename){

    $file_data = readfile($filename);
    # output the file content to the stream
//    var_dump($file_data); # return size of file

}


//readfile_onstep("students.txt");



function read_using_file($filename){

    $data =file($filename);
    #return file line by line in array
    var_dump($data);
}

//read_using_file("students.txt");



function read_content_into_string($filename){

    $data = file_get_contents($filename);
    var_dump($data); # read content of file
    # into a string

}

//read_content_into_string("students.txt");


function file_operations($filename){
    $fileobj = fopen($filename, "r");
    if ($fileobj) {
    $file_size =filesize("students.txt");
    $data = fread($fileobj, $file_size);  # read content into one string
    var_dump($data);

//    rewind($fileobj); # reset pointer to the beginning
//       fseek($fileobj, 20);
    while (!feof($fileobj)) {

        $line = fgets($fileobj);
        echo "line = {$line}<br>";
    }

    }
}


//file_operations("students.txt");


# get type of file
echo filetype("students.txt");
var_dump( file_exists("mydata.txt"));

//unlink("students.txt");


function read_or_create($filename){
    if(! file_exists($filename)){
        `touch $filename`;
    }else{
        echo "file found";
    }
}

//read_or_create("mydata.txt");


var_dump(basename("/var/www/html/os-nc44-php/day02/base.php"));
# return filename









