<?php
include("../dbConection_Login_Registration/_dbConnetion.php");
session_start();

//$_SESSION['cart'] =[];
if(!isset($_SESSION['cart']))
{
    $_SESSION['cart'] =[];
}

if(isset($_POST["santacruz"]))
{

    array_push($_SESSION['cart'], 4);
}
if(isset($_POST["element"]))
{
    array_push($_SESSION['cart'], 2);
}
if(isset($_POST["baker"]))
{
    array_push($_SESSION['cart'], 1);
}
if(isset($_POST["deathwish"]))
{
    array_push($_SESSION['cart'], 5);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Skaters Crew</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
    <link rel = "stylesheet" type = "text/css" href = "style.css">
</head>
<body class = "mb-5">
<div class ="row bg-white ">
    <header style = "padding-left: 9.09%" class = "text-center display-4 col-sm-12 col-md-10 col-lg-11">
        Skater Crew Skateboards
    </header>
    <div class = "text-center col-sm-12 col-md-2 col-lg-1" style="background-color: #FECF6A;">
        <?php
        if(isset($_SESSION['username']))
            echo "<button style = \"width: 100%\" class=\"mt-1 mr-1\"><a href = \"../html-css-img/profile.php\" class = \"mr-2\">" . strtoupper($_SESSION['username']) . "</a></button><br>";
        else
            echo "<button style = \"width: 100%\" class=\"mt-1 mr-1\"><a href = \"../dbConection_Login_Registration/login.php\" class = \"mr-2\">Login</a></button><br>";
        ?>
        <button style = "width: 100%" class="mr-1"><a href = "../html-css-img/shop.php" class = "mr-2">Cart</a></button>
    </div>
</div>
<div class="container-fluid">

    <!--NAVIGATION MENU-->

    <div class = "row bg-white p-0">
        <nav class="justify-content-between navbar navbar-expand-sm bg-dark navbar-dark mx-0 col-sm-12 col-md-12 col-lg-12">

            <ul class="navbar-nav">
                <li class="nav-item" >
                    <a class="link nav-link" href = "index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="link nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="skateboards.php">Skateboards</a>
                        <a class="dropdown-item" href="longboards.php">Longboards</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="link nav-link" href = "contact.php">Contact</a>
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
    <div class="row mt-10">
        <div class=" text-center item col-sm-12 col-md-6 col-lg-3">
            <img class="bg-warning" src="img/baker.png" alt="Baker Skateboard">
            <br>
            <div class="table-danger">
                <table class="table table-bordered">
                    <tr>
                        <th>Brand</th>
                        <th>Price</th>
                        <th>Description</th>

                    </tr>
                    <tr>
                        <th>Baker</th>
                        <th>350$</th>
                        <th>Multi Layered wood</th>
                    </tr>
                </table>
            </div>
            <form action="" method="post">
            <button type="submit" name="baker" id="baker">Add to Cart</button>
            </form>
        </div>
        <div class=" text-center item col-sm-12 col-md-6 col-lg-3">
            <img class="bg-warning" src="img/deathwish.png" alt="Baker Skateboard">
            <br>

            <div class="table-danger">
                <table class="table table-bordered">
                    <tr>
                        <th>Brand</th>
                        <th>Price</th>
                        <th>Description</th>

                    </tr>
                    <tr>
                        <th>Deathwish</th>
                        <th>250$</th>
                        <th>Light-weight</th>
                    </tr>
                </table>
            </div>

            <form action="" method="post">
            <button type="submit" name="deathwish" id="deathwish">Add to Cart</button>
            </form>
        </div>
        <div class=" text-center item col-sm-12 col-md-6 col-lg-3">
            <img class="bg-warning" src="img/element.png" alt="Element Skateboard">
            <br>
            <div class="table-danger">
                <table class="table table-bordered">
                    <tr>
                        <th>Brand</th>
                        <th>Price</th>
                        <th>Description</th>

                    </tr>
                    <tr>
                        <th>Element</th>
                        <th>300$</th>
                        <th>Resistant to the Elements</th>
                    </tr>
                </table>
            </div>
            <form action="" method="post">
            <button  type="submit" name="element" id="element">Add to Cart</button>
            </form>
        </div>
        <div class=" text-center item col-sm-12 col-md-6 col-lg-3">
            <img class="bg-warning" src="img/santacruz.png" alt="Santa Cruz Skateboard">
            <br>
            <div class="table-danger">
                <table class="table table-bordered">
                    <tr>
                        <th>Brand</th>
                        <th>Price</th>
                        <th>Description</th>

                    </tr>
                    <tr>
                        <th>Santa Cruz</th>
                        <th>320$</th>
                        <th>Nice for Cruzing</th>
                    </tr>
                </table>
            </div>
            <form action="" method="post">
            <button type="submit" name="santacruz" id="santacruz">Add to Cart</button>
            </form>
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
</body>
</html>