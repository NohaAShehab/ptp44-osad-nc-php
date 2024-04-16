<?php

include '../base.php';

echo "<h1 style='color: red'>Welcome to validation </h1> ";

//var_dump($_POST);
$errors = [];
$old_data= [];
if (empty($_POST["email"])){
    $errors["email"] = "Email is required";
}else{
    $old_data['email'] = $_POST["email"];
}

if (empty($_POST["password"])){
    $errors['password'] = "Password is required";
}

# check if email , password are not empty # then --> say thank you

# else redirect to the form page
//var_dump(count($errors));
//exit;

# convert array to string

if (count($errors)){
    $errors = json_encode($errors);
    $old_data = json_encode($old_data);
    if (! empty($old_data)){
      $url= "errors={$errors}&old_data={$old_data}";
    }else{
        $url= "errors={$errors}";
    }
    header("Location:loginform.php?{$url}");
}else{
    echo "<h1> Thank you </h1>";
    var_dump($_POST);
    $data = json_encode($_POST);
    $res=save_data($data.PHP_EOL, "users.txt");
    var_dump($res);
//    readfile("users.txt");
    display_data_in_table("users.txt");
}

function save_data($data, $filename){
    $fileobj= fopen($filename, "a");
    $res=fwrite($fileobj, $data);
    fclose($fileobj);
    return $res;
}


function display_data_in_table($filename){
    echo "<table class='table'> <tr> <th>Email</th> <th> Password</th></tr>";
    $file_data = file($filename);
//    var_dump($file_data);
    foreach ($file_data as $line){
        $info = json_decode($line);
        echo "<tr>";
        foreach ($info as $item){
            echo "<td> {$item} </td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}











