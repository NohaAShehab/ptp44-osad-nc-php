<?php


include "../base.php";
require "../utils.php";
require "../connect_credits.php";


$student_name = 'Ahmed';
$student_email = 'ahmed@gmai.com';
$student_grade = 90;

function insert_student($student_name, $student_email, $student_grade){
try{
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
//    var_dump($conn);

    $inst_qeury = "insert into `php_nc44`.`students` 
            (`name`, `email`, `grade`) values('{$student_name}', '{$student_email}', {$student_grade});";
    var_dump($inst_qeury);
    $res=$conn->query($inst_qeury);
    var_dump($res);
    select_student($conn);

}catch(Exception $e){
    echo "<h3 style='color:red'>{$e->getMessage()} </h3>";
}}


# concept prepared statement  =--> divide query ---? ---> template --> pass paramenters to the template

function insert_student_prepared($student_name, $student_email, $student_grade){
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    $inst_template = "insert into `php_nc44`.`students`(`name`, `email`, `grade`) 
        values(?, ? ,?)";
    # prepare_template of query
//    var_dump($inst_template);

    $prepared_stmt=$conn->prepare($inst_template);
//    var_dump($prepared_stmt);

//    $prepared_stmt->bind_param('ssi', $student_name, $student_email, $student_grade);
    $prepared_stmt->bind_param("ssi", $student_name, $student_email, $student_grade);
    $res=$prepared_stmt->execute();
    $new_email = "ee@fff.com";
    $prepared_stmt->bind_param("ssi", $student_name, $new_email, $student_grade);
    $res=$prepared_stmt->execute();


    # execute statement

    var_dump($res);
    select_student($conn);

}

insert_student_prepared($student_name, "test@gmail.comdf", $student_grade);










