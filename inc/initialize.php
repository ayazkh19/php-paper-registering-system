<?php
//this might change later
// sql code to create table
$sql = "CREATE TABLE IF NOT EXISTS subject(
        id INT(2)  PRIMARY KEY AUTO_INCREMENT, 
        name VARCHAR(30) NOT NULL,
        code VARCHAR (30) NOT NULL,
        teacher_id INT(2) NOT NULL DEFAULT 0,
        ch INT(2) NOT NULL
        )";
$query = $conn->query($sql);

// sql code to create table
$sql = "CREATE TABLE IF NOT EXISTS student(
        id INT(2) PRIMARY KEY AUTO_INCREMENT, 
        name VARCHAR(30) NOT NULL,
        email VARCHAR(30) NOT NULL,
        pwd varchar (30) NOT NULL
        )";
$query = $conn->query($sql);

// sql code to create table
$sql = "CREATE TABLE IF NOT EXISTS teacher(
        id INT(2) PRIMARY KEY AUTO_INCREMENT, 
        name VARCHAR(30) NOT NULL,
        email VARCHAR (30) NOT NULL
        )";
$query = $conn->query($sql);

// sql code to create table
$sql = "CREATE TABLE IF NOT EXISTS reg_subject(
        student_id INT(2)  NOT NULL, 
        subject_id INT(2) NOT NULL,
        teacher_id INT(2) NOT NULL
        )";
$query = $conn->query($sql);

//for test purposes
$debug = false;
if ($debug == true){
    if ($conn->query($sql) === TRUE) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
}