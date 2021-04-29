<?php
session_start();
$_SESSION['username'] = "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP Login Form with Password Encryption</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <?php
    /*$dbhost = 'localhost:3306';
    $dbuser = 'root';
    $dbpass = '';
    $db = 'test';

    $conn = mysqli_connect( $dbhost, $dbuser,$dbpass,$db);*/
    include("_dbConnetion.php");

    if(empty($_POST['username']) && empty($_POST['password'])) {
        echo "<script>alert(\"Please input information in both fields\")</script>";
        echo "<p><a href=\"login.php\">Go back</a></p>";
    }
    else{
        $username = $_POST['username'];
        $pw = $_POST['password'];

        $query = "SELECT * FROM users_tbl WHERE username = '". $username . "'";
        $row = mysqli_query($conn, $query);

        var_dump($row);
        $record = mysqli_fetch_row($row);

        var_dump($record);

        echo $record;
        if($record[4] == $pw){
            $_SESSION['username'] = $record[3];
            header("Location:entry.php");
        }
        else {
            echo "<script>alert(\"Wrong User Details\")</script>";
            echo "<a href='login.php'>Go back</a>";
        }
    }


    $conn->close();
    ?>
</body>

</html>