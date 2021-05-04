<?php
session_start();
$_SESSION['username'] = "";
include("_dbConnetion.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>PHP Login Form with Password Encryption</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
<br /><br />
<div class="container" style="width:500px;">
    <h3 align="center">PHP Login Form (with password encriptation...)</h3>
    <br />
    <h3 align="center">Login</h3>
    <br />
    <form method="post" action="registration_form.php">
        <label>Enter Username</label>
        <input type="text" name="username" class="form-control" />
        <br />
        <label>Enter Password</label>
        <input type="password" name="password" class="form-control" />
        <br />
        <input type="text" name="firstName" class="form-control" placeholder="FirstName..." />
        <br />
        <input type="text" name="lastName" class="form-control" placeholder="LastName..."/>
        <br />
        <input type="text" name="email" class="form-control" placeholder="Email..."/>
        <br />
        <input type="submit" name="signup" value="Sign up" class="btn btn-info" />
        <br />
        <p align="center"><a href="login.php">Login</a></p>
    </form>

    <?php
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

</div>
</body>

</html>
