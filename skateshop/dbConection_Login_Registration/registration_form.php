<?php
session_start();
$_SESSION['username'] = "";
include("_dbConnetion.php");



    $username = $_POST['username'];
    $pw = $_POST['password'];
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $email = $_POST['email'];


    if(isset($_POST['username']) && isset($_POST['password'])) {
        $query = "INSERT INTO users_tbl(firstName, lastName, username, password, email)VALUES('". $firstname . "','" . $lastname . "','" . $username . "','" . $pw . "','" . $email ."')";

        if($conn->query($query) === TRUE){
            $_SESSION['username'] = $username;
            header("Location:../html-css-img/index.php");
        }
        else{

            echo "<script>alert(\"Please input some information\")</script>";
            header("Location:../html-css-img/registration_form.php");
        }
    }
    ?>

