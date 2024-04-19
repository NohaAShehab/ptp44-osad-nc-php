<?php

function generatetitle($title, $color)
{
    echo "<h1 style='color: {$color}'>{$title}</h1>";
}


function display_in_table($rows){
    echo "<table class='table'> <tr> <th>ID</th>  <th>Name</th>  <th>Email</th>
    <th>Grade</th>
    </tr>";
    foreach ($rows as $row){
        echo "<tr>";
        foreach ($row as $value){
            echo "<td>{$value}</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}




function select_student($conn){

    try{
        $select_query = "select * from `php_nc44`.`students`";
        $res = $conn->query($select_query);
        $rows = $res->fetch_all();
        display_in_table($rows);
        $res->free();
        $conn->close();

    }catch (Exception $e){
        echo "<h3 style='color: red'> {$e->getMessage()}</h3>";
    }

}








