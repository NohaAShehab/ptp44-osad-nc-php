<?php
require '../db_pdo/connect_pdo.php';
require '../utils.php';


function get_all_data(){

    $pdo = connect_to_db_pdo();
//    var_dump($pdo);

    $query = "select * from students";
    $statement = $pdo->prepare($query);
    $res=$statement->execute();
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $rows;

}

//get_all_data();

function display_table($rows){

        echo "<table class='table'> <tr> <th>ID</th>  <th>Name</th>  <th>Email</th>
    <th>Grade</th> <th>Edit</th> <th> Delete</th>
    </tr>";
        # id --> first parameter in the row
        foreach ($rows as $row){
            $url_query_string = $row['id'];
            $delete_url = "delete_student.php?id={$url_query_string}";
            $edit_url = "edit_student.php?id={$url_query_string}";

            echo "<tr>";
            foreach ($row as $value){
                echo "<td>{$value}</td>";
            }
            echo "<td><a href='{$edit_url}' class='btn btn-warning'>Edit</a></td>";
            echo "<td> <a href='{$delete_url}'  class='btn btn-danger'> Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";

}


echo generatetitle("All Data", "blue");

$rows = get_all_data();
display_table($rows);