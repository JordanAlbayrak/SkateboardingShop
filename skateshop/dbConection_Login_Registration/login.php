<?php
include("_dbConnetion.php");
session_start();
$_SESSION['username'] = "";
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
    <form method="post" action="login.php">
        <label>Enter Username</label>
        <input type="text" name="username" class="form-control" />
        <br />
        <label>Enter Password</label>
        <input type="password" name="password" class="form-control" />
        <br />
        <input type="submit" name="login" value="Login" class="btn btn-info" />
        <br />
        <p align="center"><a href="registration_form.php">Register</a></p>
    </form>

    <?php
    if(empty($_POST['username']) && empty($_POST['password'])) {
        echo "<script>alert(\"Please input information in both fields\")</script>";
    }
    else{
        $username = $_POST['username'];
        $pw = $_POST['password'];

        $query = "SELECT * FROM users_tbl WHERE username = '". $username . "'";
        $row = mysqli_query($conn, $query);

        $record = mysqli_fetch_row($row);

        if($record[4] == $pw){
            $_SESSION['username'] = $record[3];
            header("Location:entry.php");
        }
        else {
            echo "<script>alert(\"Wrong User Details\")</script>";
        }
    }


    $conn->close();
    ?>
</div>
</body>

</html>
