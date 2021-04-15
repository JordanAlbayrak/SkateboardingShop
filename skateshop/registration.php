<?php
    session_start();
    $_SESSION['username'] = "";
    include("_dbConnetion.php");



    $username = $_POST['username'];
    $pw = $_POST['password'];
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $email = $_POST['email'];


    if(!empty($_POST['username']) && !empty($_POST['password'])) {
        $query = "INSERT INTO users_tbl(firstName, lastName, username, password, email)
                    VALUES('". $firstname . "','" . $lastname . "','" . $username . "','" . $pw . "','" . $email ."')";

        if($conn->query($query) === TRUE){
            $_SESSION['username'] = $username;
            header("Location:entry.php");
        }
    }
    else{
        echo "<script>alert(\"Please input some information\")</script>";
        echo "<p><a href=\"login.php\">Go back</a></p>";
    }
?>
