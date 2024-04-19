<?php

include '../base.php';
# manatory script --> import 00> inside another script
require '../connect_credits.php'; # raise error if php cannot reach file
require '../utils.php';



generatetitle("Connect to db using mysqli_ OOP", "green");


function connect_to_db(){
    try{
        # open connection

        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD,
            DB_NAME, DB_PORT);
//        var_dump($conn);
        return $conn;


    }catch (Exception $e){
        echo "$e";
        return false;
    }
}

//connect_to_db();


function insert_student()
{
    try{

        $conn = connect_to_db();
        $inst_query = "insert into `php_nc44`.`students`(`name`, `email`, `grade`)
        values ('nasser','nasser@gmail.com',100);
            ";

        $res=$conn->query($inst_query);
        var_dump($res); # true / false
        echo "<h4 style='color:blue'> Student inserted {$conn->insert_id}</h4>";
    }catch (Exception $e){
        echo "<h3 style='color: red'> {$e->getMessage()}</h3>";
    }
}

//insert_student();
function delete_student()
{
    try{

        $conn = connect_to_db();
        $delete_query = "delete from `php_nc44`.`students` where id = 7;";

        $res=$conn->query($delete_query);
//        var_dump($res); # true / false

        echo "<h4 style='color:blue'> Student delete {$conn->affected_rows}</h4>";
    }catch (Exception $e){
        echo "<h3 style='color: red'> {$e->getMessage()}</h3>";
    }
}



delete_student();



function select_student(){

    try{
        $conn = connect_to_db();
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
select_student();




