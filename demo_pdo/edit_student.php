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
    $obj = "select * from students where id=$std_id";
    $stmt = $pdo->prepare($obj);
    $stmt->execute();
    $obj = $stmt->fetch(PDO::FETCH_ASSOC);
    var_dump($obj);
}catch(PDOException $e){
    echo $e->getMessage();

}