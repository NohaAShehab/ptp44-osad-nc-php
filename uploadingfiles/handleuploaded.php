<?php

include "../base.php";
function generateTitle($title, $color){
    echo "<h1 style='color:{$color}'>{$title}</h1>";
}

generateTitle("Upload file", "red");
//var_dump($_POST);
echo generateTitle("Thank you for upload image {$_POST['email']}", 'blue');

# you will find file --> $_FILES
var_dump($_FILES);
if (isset($_FILES['image']['tmp_name'])){
    $filename = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    var_dump($extension);

    # save to images
    $saved = move_uploaded_file($tmp_name, "images/{$filename}");

    ### display uploaded image

    echo "<img  width='300' height='300' src='images/{$filename}'> ";
}














