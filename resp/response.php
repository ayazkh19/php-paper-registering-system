<?php
include_once "../inc/header.php";
require_once '../inc/connection.php';

$submit = isset($_POST['submit']);
$fields = isset($_POST['subject']) && isset($_POST['code']) && isset($_POST['ch']) && isset($_POST['instructor']) && isset($_POST['instructor-email']);

if(!$submit || !$fields){
//TODO we should redirect from here
    exit("Error");
}
//TODO Require validation and sanitization
$subject_name = trim(strtoupper($_POST['subject']));
$subject_code = trim(strtoupper($_POST['code']));
$subject_ch = trim(strtoupper($_POST['ch']));
$instructor = trim(strtoupper($_POST['instructor']));
$instructor_email = trim(strtoupper($_POST['instructor-email']));

if (empty($subject_name) || empty($subject_code) || empty($subject_ch) || empty($instructor) || empty($instructor_email)){
    die("Error occurred while performing this operation");
}else{
    $success = '<div class="alert alert-success" role="alert">
                Record Added Successfully.
            </div>
            <a class="btn btn-primary" href="../add-subject.php">Add Another Subject</a>';
    $error = '<div class="alert alert-danger" role="alert">
                Error occurred while performing this operation.
            </div>
            <a class="btn btn-primary" href="../add-subject.php">Add Another Subject</a>';

    $sql = "INSERT INTO teacher(name, email)
    VALUES ('$instructor', '$instructor_email')";
//    $sql = "INSERT INTO subject(name, code, ch)
//    VALUES ('$subject_name', '$subject_code', '$subject_ch')";

    $query = $conn->query($sql);
    if($query === true){

        $last_inserted_id = $conn->insert_id;
        $sql = "INSERT INTO subject(name, code, teacher_id, ch)
           VALUES ('$subject_name', '$subject_code', '$last_inserted_id', '$subject_ch')";
        $query = $conn->query($sql);

        if($query == true){
            echo $success;
        }else{
            die('ERROR: second query');
        }

    }else{
        echo $error;
        die();
    }
}


include_once "../inc/footer.php";