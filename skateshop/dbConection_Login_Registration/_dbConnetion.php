<?php
    $dbhost = 'localhost:3307';
    $dbuser = 'root';
    $dbpass = '';
    $db = 'test';


    $conn = mysqli_connect($dbhost, $dbuser,$dbpass,$db);

    if(!$conn){
        die('Could not connect connect: ') ;
    }

    $sql_query = "USE ". $db;

    $sql_query = "CREATE TABLE IF NOT EXISTS users_tbl(
    id INT auto_increment NOT NULL,
    firstName varchar(125),
    lastName varchar(125),
    username varchar(125) NOT NULL,
    password varchar(300) NOT NULL,
    email varchar(125),
    primary key(ID)
    )";

    $conn ->query($sql_query);

    $sql_query = "CREATE TABLE IF NOT EXISTS skateboards (
    skateId INT unique auto_increment,
	name VARCHAR(50) unique,
	quantity INT,
	price DECIMAL(5,2),
	PRIMARY KEY(skateId)
    )";

    $conn ->query($sql_query);

    $sql = "INSERT INTO skateboards(name, quantity, price)VALUES(\"Baker\", 25, 350)";
    $conn->query($sql);
    $sql = "INSERT INTO skateboards(name, quantity, price)VALUES(\"Element\", 25, 300)";
    $conn->query($sql);
    $sql = "INSERT INTO skateboards(name, quantity, price)VALUES(\"Empire\", 25, 220)";
    $conn->query($sql);
    $sql = "INSERT INTO skateboards(name, quantity, price)VALUES(\"Santa Cruz\", 25, 320)";
    $conn->query($sql);
    $sql = "INSERT INTO skateboards(name, quantity, price)VALUES(\"Primitive\", 25, 250)";
    $conn->query($sql);

    $sql_query = "CREATE TABLE IF NOT EXISTS longboards (
    longBId INT UNIQUE auto_increment,
	name VARCHAR(50) unique,
	quantity INT,
	price DECIMAL(5,2),
	PRIMARY KEY(longBId)
    )";

    $conn->query($sql_query);

    $sql = "INSERT INTO longboards(name, quantity, price)VALUES(\"Riviera\", 25, 350)";
    $conn->query($sql);
    $sql = "INSERT INTO longboards(name, quantity, price)VALUES(\"Santa Cruz\", 25, 400)";
    $conn->query($sql);
    $sql = "INSERT INTO longboards(name, quantity, price)VALUES(\"Omen\", 25, 320)";
    $conn->query($sql);
    $sql = "INSERT INTO longboards(name, quantity, price)VALUES(\"Prism\", 25, 420)";
    $conn->query($sql);
    $sql = "INSERT INTO longboards(name, quantity, price)VALUES(\"Moonshine\", 25, 370)";
    $conn->query($sql);

    $conn ->query($sql_query);
?>