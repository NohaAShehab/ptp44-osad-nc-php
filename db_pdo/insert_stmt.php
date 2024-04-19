

<?php

include_once '../base.php';
require_once "connect_pdo.php";
require_once "../utils.php";
require 'select_data.php';

generatetitle("Insert Statement-> using prepared statement with ?", 'blue');
//try{
//    $pdo = connect_to_db_pdo();
//    # pdo  --> ? place holder
//    $insert_query = "INSERT INTO students (`name`, `email`, `grade`) VALUES (?, ?, ?)";
//    $stmt  = $pdo->prepare($insert_query);
//    var_dump($stmt);
//    ## bind values
//    $res = $stmt->execute(['mohamed', 'mohamed@gmaildk.com', 70]);
//    var_dump($res);
//    if($res){
//        echo "<h1> Inserted {$pdo->lastInsertId()}</h1>";
//        display_data();
//    }
//
//
//}catch (PDOException $e){
//    echo $e->getMessage();
//}

generatetitle("Insert statement  -- > : place holder", "red");
try{
    $std_name = "noha";
    $std_email="n@gmail.com";

    $pdo = connect_to_db_pdo();
    # pdo  --> : place holder
    $insert_query = "INSERT INTO students (`name`, `email`, `grade`) 
        VALUES (:stdname, :stdemail, :stdgrade)";
    $stmt  = $pdo->prepare($insert_query);
    var_dump($stmt);
    ## bind values
    $stmt ->bindParam(':stdname',$std_name );
    $stmt->bindParam(':stdemail', $std_email );
    $stmt->bindValue(':stdgrade',  44);
    $res = $stmt->execute();
    var_dump($res);
    if($res){
        echo "<h1> Inserted {$pdo->lastInsertId()}</h1>";
        display_data();
    }


}catch (PDOException $e){
    echo $e->getMessage();
}












