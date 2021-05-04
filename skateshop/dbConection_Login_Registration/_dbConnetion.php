<?php

    $dbhost = 'localhost:3307';
    $dbuser = 'root';
    $dbpass = '';
    $db = 'test';

    $conn = mysqli_connect( $dbhost, $dbuser,$dbpass,$db);

    if(!$conn){
        die('Could not connect connect: ') ;
    }

    $sql_query = "USE ". $db;

    $sql_query = "CREATE TABLE IF NOT EXISTS users_tl(
    id INT auto_increment NOT NULL,b
    firstName varchar(125),
    lastName varchar(125),
    username varchar(125) NOT NULL,
    password varchar(300) NOT NULL,
    email varchar(125),
    primary key(ID)
    )";

    $conn ->query($sql_query);
?>