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
        Skater Crew
    </header>
    <div class = "text-center col-sm-12 col-md-2 col-lg-1">
        <button style = "width: 100%" class="mt-1 mr-1"><a href = "../dbConection_Login_Registration/login.php" class = "mr-2">Log in</a></button>
        <br>
        <button style = "width: 100%" class="mr-1"><a href = "../dbConection_Login_Registration/entry.php" class = "mr-2">Shop Cart</a></button>
    </div>
</div>
    <div class="container-fluid">

        <!--NAVIGATION MENU-->

        <div class = "row bg-white p-0">
            <nav class="justify-content-between navbar navbar-expand-sm bg-dark navbar-dark mx-0 col-sm-12 col-md-12 col-lg-12">

                <ul class="navbar-nav">
                    <li class="nav-item active" >
                        <a class="nav-link" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href = "index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="skateboards.php">Skateboards</a>
                            <a class="dropdown-item" href="longboards.php">Longboards</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href = "contact.php">Contact</a>
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
                        <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
            </div>
            <!--<div class = "col-sm-* col-md-* col-lg-3">
                <img class = "img-fluid" src="img\stickers2.png" alt="stickers2"/>
            </div>-->
        </div>

        <!-- OUR PRODUCTS Section -->
        <div class="row">
        <h1 id = "ourproducts" class = "col-sm-12 col-md-12 col-lg-12">Our Products</h1>
        </div>
        <div class="row">

            <div class = "col-sm-12 col-md-12 col-lg-6">
                <img class = "center img-fluid" src="img\longboards.jpg" alt="longboards" />
                <div class="txt">
                    <h1><a href="longboards.php">Longboards</a></h1>
                </div>
            </div>

            <div class = "col-sm-12 col-md-12 col-lg-6">
                <img class = "center img-fluid" src="img\skateboards.jpg" alt="skateboards" />
                <div class="txt">
                    <h1><a href="longboards.php">Skateboards</a></h1>
                </div>
            </div>


        </div>
        <!-- OUR CLIENTS Section -->
        <div class="row">
            <h1 id = "ourclients" class = "col-sm-12 col-md-12 col-lg-12">Our Clients</h1>
        </div>
        <div class="row">
            <div class = "col-sm-12 col-md-12 col-lg-6">
                <img class = "img-fluid" src="img\slide2.jpg" alt="Second Slide" />
                <div class="txt">
                    <p>
                        Hi all, I want to use the "Student Success Week" in a creative way - so that it actually will help you in your progression.
                        I think the thing you need MOST time on is your game project (I really want it to be a GOOD game at the end).
                        So I will allow you to work on this for this week and we will use the class time for help with your projects, if you need it.
                        I'll be online at the class times - and if you need help just pass by and ask your technical or design questions for the game.
                        So class is not mandatory these 2 classes but I will be available.
                        Also, I did say I'd accept one lab late - with a penalty.  So if you have any labs you need to catch up on , you can send it in.
                        You would have to notify me via Mio if you decide to do this.
                    </p>
                </div>
            </div>

            <div class = "col-sm-12 col-md-12 col-lg-6">
                <img class = "img-fluid" src="img\slide2.jpg" alt="Second Slide" />
                <div class="txt">
                    <p>
                        Hi all, I want to use the "Student Success Week" in a creative way - so that it actually will help you in your progression.
                        I think the thing you need MOST time on is your game project (I really want it to be a GOOD game at the end).
                        So I will allow you to work on this for this week and we will use the class time for help with your projects, if you need it.
                        I'll be online at the class times - and if you need help just pass by and ask your technical or design questions for the game.
                        So class is not mandatory these 2 classes but I will be available.
                        Also, I did say I'd accept one lab late - with a penalty.  So if you have any labs you need to catch up on , you can send it in.
                        You would have to notify me via Mio if you decide to do this.
                    </p>
                </div>
            </div>
        </div>

        <!-- ABOUT US Section -->

        <div class="row">
            <h1 id = "aboutus" class = "col-sm-12 col-md-12 col-lg-12">About Us</h1>
        </div>
        <div class="row">
            <div class = "col-sm-12 col-md-12 col-lg-6">
                <video width="600" class="center" controls>
                    <source src="vids/skateVid.mp4" type="video/mp4">
                    Your browser does not support HTML video.
                </video>
            </div>

            <div class = "col-sm-12 col-md-12 col-lg-6">
                <video width="600" class="center"  controls>
                    <source src="vids/skateVid2.mp4" type="video/mp4">
                    Your browser does not support HTML video.
                </video>
            </div>
            <div class = "col-sm-12 col-md-12 col-lg-12">
                <img class = "img-fluid" src="img\SkateShoesPic2.jpg" alt="Second Slide" />
            </div>
        </div>



    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
</body>
</html>