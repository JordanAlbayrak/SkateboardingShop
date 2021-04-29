<?php

    $dbhost = 'localhost:3307';
    $dbuser = 'root';
    $dbpass = '';
    $db = 'test';

    $conn = mysqli_connect( $dbhost, $dbuser,$dbpass,$db);

    if(! $conn){
        die('Could not connect connect: ') ;
    }

    echo 'Successfully Connected';

    $sql_query = "USE ". $db;
    if ($conn->query($sql_query) === TRUE) {
        echo "Database created successfully";
    }
    else {
        echo "Error creating database: " . $conn->error;
    }
    $sql_query = "CREATE TABLE IF NOT EXISTS users_tbl(
    id INT auto_increment NOT NULL,
    firstName varchar(125),
    lastName varchar(125),
    username varchar(125) NOT NULL,
    password varchar(300) NOT NULL,
    email varchar(125),
    primary key(ID)
    )";

    if ($conn ->query($sql_query) === TRUE) {
        echo "\nTable created successfully";
    }
    else{
        echo "Error creating table: " . $conn->error;
    }
    //mysqli_close($conn);

?>