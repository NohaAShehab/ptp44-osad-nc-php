<?php

include '../base.php';

function generateTitle($title, $color){
    echo "<h1 style='color:{$color}'>{$title}</h1>";
}

//generateTitle("Login process", "green");

if($_POST['email'] ==='noha@gmail.com'&& $_POST['password']==='iti'){
    generateTitle("logged in successfully ", "green");
    session_start(); # start session between server and user
    # sess_ko6160k6nt88r763t3gd6lb997
    # save information in the session file
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['login'] = true;
    $_SESSION["message"]= "hi";
    setcookie("name", $_POST['email'], time()+3600, '/', "",0);

    var_dump($_SESSION);
    header("location:homepage.php");
}else{
    header("Location:loginform.php");
}