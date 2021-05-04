<?php
include("../dbConection_Login_Registration/_dbConnetion.php");
session_start();
if (!isset($_SESSION["username"])) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Skaters Crew</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
    <link rel="stylesheet" type = "text/css" href = "style.css">
</head>
<body class = "mb-5">
<div class ="row bg-white ">
    <header style = "padding-left: 9.09%" class = "text-center display-4 col-sm-12 col-md-10 col-lg-11">
        Skater Crew Contact
    </header>
    <div class = "text-center col-sm-12 col-md-2 col-lg-1">
        <button style = "width: 100%" class="mr-1"><a href = "../html-css-img/shop.php" class = "mr-2">Cart</a></button>
    </div>
</div>
<div class="container-fluid">

    <!--NAVIGATION MENU-->

    <div class = "row p-0">
        <nav class="justify-content-between navbar navbar-expand-sm bg-dark navbar-dark mx-0 col-sm-12 col-md-12 col-lg-12">

            <ul class="navbar-nav">
                <li class="nav-item" >
                    <a class="nav-link" href = "index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="skateboards.php">Skateboards</a>
                        <a class="dropdown-item" href="longboards.php">Longboards</a>
                    </div>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href = "contact.php">Contact</a>
                </li>
            </ul>
        </nav>
    </div>
    <div class = "text-center txt">
        <?php
        echo '<h2>Welcome - ' . $_SESSION["username"] . '</h2>';
        echo '<br><h3> Shopping Cart </h3>';

        echo '<label><a class="link" href="../dbConection_Login_Registration/logout.php">Logout</a></label>';
        ?>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
</body>
</html>