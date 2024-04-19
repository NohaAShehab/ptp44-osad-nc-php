<?php

include_once '../base.php';
require_once "connect_pdo.php";
require_once "../utils.php";

function display_data(){
try{
    $pdo = connect_to_db_pdo();
    var_dump($pdo);
    if ($pdo){
        # select
//        $select_query = 'select * from students order by id desc limit 4';
//        $select_query = 'select * from students where id > ?';
        $select_query = 'select * from students;';
        # prepared statement
        $stmt= $pdo->prepare($select_query); # PDOStatement
//        var_dump($stmt);
//        $res= $stmt->execute([11] );
        $res= $stmt->execute();

        var_dump($res);
        if($res){
//            $rows = $stmt->fetchAll();
            $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
//            $rows = $stmt->fetchAll(PDO::FETCH_OBJ);
//            var_dump($rows);
            display_in_table($rows);
        }
    }
}catch(Exception $e){
    echo "<h3 style='color:red'>{$e->getMessage()}</h3>";
}
    }