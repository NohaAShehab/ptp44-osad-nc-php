<?php
require_once '../base.php';
require_once  '../db_pdo/connect_pdo.php';
require_once '../utils.php';

var_dump($_GET);

$std_id = $_GET['id'];
var_dump($std_id);

try{
    $pdo = connect_to_db_pdo();
    var_dump($pdo);

    $delete_query = "DELETE FROM students WHERE id = :id";
    $stmt = $pdo->prepare($delete_query);
    $stmt->bindParam(':id', $std_id, PDO::PARAM_INT);
    $res=$stmt->execute();
    if($stmt->rowCount()==1){
       generatetitle("Deleted Student ", "green");
    }
    header("Location:data_table.php");
}catch(PDOException $e){
    echo $e->getMessage();

}