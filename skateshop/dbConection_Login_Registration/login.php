<?php
include("_dbConnetion.php");
session_start();
$_SESSION['username'] = "";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Skaters Crew</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
    <link rel = "stylesheet" type = "text/css" href = "style.css">
</head>

<body class="mb-5">
<div class ="row bg-white ">
    <header style = "padding-left: 9.09%" class = "text-center display-4 col-sm-12 col-md-10 col-lg-11">
        Skater Crew Login
    </header>
    <div class = "text-center col-sm-12 col-md-2 col-lg-1">
        <button style = "width: 100%" class="mr-1"><a href = "../dbConection_Login_Registration/shop    .php" class = "mr-2">Shop Cart</a></button>
    </div>
</div>
<br><br>

<div class="container-fluid">

    <!--NAVIGATION MENU-->

    <div class = "row bg-white p-0">
        <nav class="justify-content-between navbar navbar-expand-sm bg-dark navbar-dark mx-0 col-sm-12 col-md-12 col-lg-12">

            <ul class="navbar-nav">
                <li class="nav-item active" >
                    <a class="nav-link" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href = "../html-css-img/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../html-css-img/skateboards.php">Skateboards</a>
                        <a class="dropdown-item" href="../html-css-img/longboards.php">Longboards</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href = "../html-css-img/contact.php">Contact</a>
                </li>
            </ul>
            <div class="float-right">
                <form class="nav-item form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
    <br />
    <h3 align="center">Login</h3>
    <br />
    <div class="center container" style="width: 30%">
        <form method="post" action="login.php">
            <label>Enter Username</label>
            <input type="text" name="username" class="form-control" style="width:40%%" />
            <br />
            <label>Enter Password</label>
            <input type="password" name="password" class="form-control" style="width:40%%" />
            <br />
            <input type="submit" name="login" value="Login" class="btn btn-info" />
            <br />
            <p align="center"><a href="registration_form.php">Register</a></p>
        </form>
    </div>
    <?php
    if(!empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $pw = $_POST['password'];

        $query = "SELECT * FROM users_tbl WHERE username = '". $username . "'";
        $row = mysqli_query($conn, $query);

        $record = mysqli_fetch_row($row);

        if($record[4] == $pw){
            $_SESSION['username'] = $record[3];
            header("Location:../html-css-img/index.php");
        }
        else {
            echo "<script>alert(\"Wrong User Details\")</script>";
        }
    }
    else{
        echo "<script>alert(\"Please input information in both fields\")</script>";
    }


    $conn->close();
    ?>
</div>
</body>

</html>
