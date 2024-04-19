<?php

include '../base.php';

function generatetitle($title, $color)
{
    echo "<h1 style='color: {$color}'>{$title}</h1>";
}

const DB_HOST = '127.0.0.1';
const DB_USER = 'os_nc44';
const DB_PASSWORD = 'iti123456789_';
const DB_NAME = 'php_nc44';
const DB_PORT = 3306;


generatetitle("Connect to db", "green");


# connect to database
function connect_to_db(){
    try{
        # open connection
        $conn = mysqli_connect(DB_HOST, DB_USER,
            DB_PASSWORD, DB_NAME, DB_PORT);
//        var_dump($conn);
        return $conn;

    }catch (Exception $e){
        echo "$e";
        return false;
    }
}





# use connection 00> query --> create table
function create_table()
{
    try {
        # open connection
        $conn = connect_to_db();
        var_dump($conn);
        # query?
        $query = "create table `students`(`id` int auto_increment primary key,
            `name` varchar(100) not null, `email` varchar(200) unique , `grade` int default 10
        );";
//    var_dump($query);
        $res = mysqli_query($conn, $query);
        var_dump($res);

        mysqli_close($conn);
        var_dump($conn);
    } catch (Exception $e) {
        echo "<h3 style='color: red'> {$e} </h3>";
    }
}

//create_table();

generatetitle("Insert", "blue");

function insert_student()
{
    try {
        $conn = connect_to_db();
        $inst_query = "insert into `php_nc44`.`students`(`name`, `email`, `grade`)
        values ('hadeer','hadeer@gmail.com',120);
            ";

        $res = mysqli_query($conn, $inst_query);  # true --> query -->
        var_dump($res);
//        var_dump($conn);
        echo "<h4 style='color: green'>student inserted id {$conn->insert_id}</h4>";
        mysqli_close($conn);
    }catch (Exception $e){
        echo "<h3 style='color: red'> {$e->getMessage()} </h3>";
    }
}

//insert_student();
generatetitle("Update","purple");
function update_student()
{
    try {
        $conn = connect_to_db();
        $update_query = "update `php_nc44`.`students` set `name`='Ayman' where `id`=7;";
        $res = mysqli_query($conn, $update_query);  # true --> query -->
        if($conn->affected_rows > 0){
            echo "<h4 style='color: green'>student updated successfully</h4>";
        }else{
            echo "<h4 style='color: red'>student not updated</h4>";
        }
//        var_dump($res);
//        var_dump($conn);
        mysqli_close($conn);

    }catch (Exception $e){
        echo "<h3 style='color: red'> {$e->getMessage()} </h3>";
    }
}

//update_student();

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

generatetitle("Select","Orange");
function select_students(){
    try{
    $conn = connect_to_db();
    $select_query = "select * from `php_nc44`.`students`";
    $res = mysqli_query($conn, $select_query);  # have info about result


//    var_dump($res);
    # fetch result
    $rows=mysqli_fetch_all($res); # fetch rows as indexed array
    display_in_table($rows);
//    var_dump($rows);

//    $rows = mysqli_fetch_assoc($res);
//    var_dump($rows);

        # free result set
        var_dump($res);
        mysqli_free_result($res);

        mysqli_close($conn);
    }catch (Exception $e){
        echo "<h3 style='color: red'> {$e->getMessage()} </h3>";
    }
}

select_students();





























