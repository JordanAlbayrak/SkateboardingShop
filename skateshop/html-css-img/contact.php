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
    <link rel="stylesheet" type = "text/css" href = "style.css">

    <script>
        function PlaySound() {
            alert("Do a kickflip");
            var sound = new audio();
            sound.src = "vids/kickflip.mp3";
            document.getElementById(sound);
            sound.Play();
        }
    </script>
</head>

<body class = "mb-5">
<div class ="row bg-white ">
    <header style = "padding-left: 9.09%" class = "text-center display-4 col-sm-12 col-md-10 col-lg-11">
        Skater Crew Contact
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
        <nav class="justify-content-between navbar navbar-expand-sm bg-dark navbar-dark mx-0 col-sm-12 col-md-12 col-lg-12">

            <ul class="navbar-nav">
                <li class="nav-item" >
                    <a class="link nav-link" href = "../html-css-img/index.php">Home</a>
                </li>
                <li class="nav-item">
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
        </nav>
    </div>

    <div class="row mt-10">
        <div class=" text-center col-sm-12 col-md-6 col-lg-3">
            <a href="https://www.instagram.com/berrics/">
            <img src="img/instagram.png" alt="Instagram">
            </a>

        </div>
        <div class=" text-center col-sm-12 col-md-6 col-lg-3">
            <a href="https://www.facebook.com/berrics/">
            <img src="img/facebook.png" alt="Facebook">
            </a>

        </div>
        <div class=" text-center col-sm-12 col-md-6 col-lg-3">
            <a href="https://www.amazon.ca/Bible-King-James-Testaments-Annotated-ebook/dp/B0883FS623/ref=sr_1_6?dchild=1&keywords=bible&qid=1621108226&sr=8-6">
            <img src="img/amazon.png" alt="Amazon">
            </a>
        </div>
        <div class=" text-center col-sm-12 col-md-6 col-lg-3">

            <a onclick="PlaySound">
            <img src="img/tony.png" alt="Tony">
            <audio id="sound"> </audio>
            </a>
            <audio controls autoplay>
                <source src="vids/kickflip.mp3" type="audio/mpeg">
            </audio>
        </div>

    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
</body>
</html>