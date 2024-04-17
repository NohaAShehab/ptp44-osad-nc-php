<?php
include "../base.php";
#
session_start();
if($_SESSION['login']===true) {


    echo "<h1> welcome to home page ,
 </br> you are already logged in </h1>";

    echo "<h2>welcome{$_COOKIE['name']}</h2>";


    echo "<a class='btn btn-dark' href='logout.php'> logout </a>";

}else{
    header("location:loginform.php");
}