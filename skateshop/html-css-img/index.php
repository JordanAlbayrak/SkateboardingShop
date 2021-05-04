<?php
include("../dbConection_Login_Registration/_dbConnetion.php");
session_start();
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
    <div class ="row ">
        <header style = "padding-left: 9.09%" class = "text-center display-4 col-sm-12 col-md-10 col-lg-11">
            Skater Crew
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

        <div class = "row p-0">
            <nav class="justify-content-between navbar bg-dark navbar-dark navbar-expand-sm mx-0 col-sm-12 col-md-12 col-lg-12">

                <ul class="navbar-nav">
                    <li class="nav-item" >
                        <a class="link nav-link" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href = "../html-css-img/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="link nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="../html-css-img/skateboards.php">Skateboards</a>
                            <a class="dropdown-item" href="../html-css-img/longboards.php">Longboards</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="link nav-link" href = "../html-css-img/contact.php">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>

        <!--Image slider-->

        <div class="row stickersbg">
            <!--<div class = "col-sm-* col-md-* col-lg-3">
                <img class = "img-fluid" src="img\stickers1.png" alt="stickers"/>
            </div>-->

                <div class = "mh-25 col-sm-12 col-md-12 col-lg-6" id = "slider">

                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active">
                                <img src="img\slide1.jpg" alt="First Slide" class = "slide center" />
                            </div>

                            <div class="carousel-item">
                                <img src="img\slide2.jpg" alt="Second Slide" class = "slide center"/>

                            </div>

                            <div class="carousel-item">
                                <img src="img\slide3.jpg" alt="Third Slide" class = "slide center"/>
                            </div>
                        </div>
                        <a style="width: 5%" class="link carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a style="width: 5%" class="link carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
            </div>
            <!--<div class = "col-sm-* col-md-* col-lg-3">
                <img class = "img-fluid" src="img\stickers2.png" alt="stickers2"/>
            </div>-->
        </div>

        <div class="backgorund round">
        <!-- OUR PRODUCTS Section -->
        <div class="row no-margin">
        <h1 class = "col-sm-12 col-md-12 col-lg-12">Our Products</h1>
        </div>
        <div class="row">

            <div class = "col-sm-12 col-md-12 col-lg-6">
                <img class = "center img-fluid" src="img\longboards.jpg" alt="longboards" />
                <div>
                    <h1 style="border-top-right-radius: 15px;border-bottom-right-radius: 15px"><a class="link" href="longboards.php">Longboards</a></h1>
                </div>
            </div>

            <div class = "col-sm-12 col-md-12 col-lg-6">
                <img class = "center img-fluid" src="img\skateboards.jpg" alt="skateboards" />
                <div>
                    <h1 style="border-top-left-radius: 15px;border-bottom-left-radius: 15px"><a class="link" href="longboards.php">Skateboards</a></h1>
                </div>
            </div>


        </div>

        <!-- ABOUT US Section -->

        <div class="row no-margin">
            <h1 class = "col-sm-12 col-md-12 col-lg-12">About Us</h1>
        </div>
        <div class="row">
            <div class = "col-sm-12 col-md-12 col-lg-6">
                <video width="600" class="center roundV" controls>
                    <source src="vids/skateVid.mp4" type="video/mp4">
                    Your browser does not support HTML video.
                </video>
            </div>

            <div class = "col-sm-12 col-md-12 col-lg-6">
                <video width="600" class="center roundV"  controls>
                    <source src="vids/skateVid2.mp4" type="video/mp4">
                    Your browser does not support HTML video.
                </video>
            </div>
            <div class = "col-sm-12 col-md-12 col-lg-12">
                <img class = "img-fluid" src="img\SkateShoesPic2.jpg" alt="Second Slide" />
            </div>
        </div>
    </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
</body>
</html>