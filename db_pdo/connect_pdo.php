<?php


include_once '../base.php';
require_once '../connect_credits.php';

function connect_to_db_pdo(){
    try {
        $dsn= "mysql:host=localhost;dbname=php_nc44;port=3306";
//        var_dump($dsn);
        $pdo=  new PDO($dsn, DB_USER, DB_PASSWORD);
        # connection --> object ---> data hidden

//        var_dump($pdo);
        return $pdo;
    }
    catch (Exception $e) {
        echo "<h3 style='color:red'>{$e->getMessage()}</h3>";
        return false;
    }
}

//connect_to_db_pdo();