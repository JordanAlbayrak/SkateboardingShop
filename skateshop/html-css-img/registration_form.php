<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Skaters Crew</title>
    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
    <link rel = "stylesheet" type = "text/css" href = "../html-css-img/style.css">
</head>
<body class = "mb-5">
<div class ="row bg-white ">
    <header style = "padding-left: 9.09%" class = "text-center display-4 col-sm-12 col-md-12 col-lg-12">
        Skater Crew Registration
    </header>
</div>

<div class = "row bg-white p-0">
    <nav class="justify-content-between navbar navbar-expand-sm bg-dark navbar-dark mx-0 col-sm-12 col-md-12 col-lg-12">

        <ul class="navbar-nav">
            <li class="nav-item" >
                <a class="link nav-link" href = "../html-css-img/index.php">Home</a>
            </li>
            <li class="nav-item active">
                <a class="link nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="../html-css-img/skateboards.php">Skateboards</a>
                    <a class="dropdown-item" href="../html-css-img/longboards.php">Longboards</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="link nav-link" href = "contact.php">Contact</a>
            </li>
        </ul>
    </nav>
</div>

<body>
<br /><br />
<div class="bg-warning border border-danger center container" style="width:500px;">
    <h3 align="center">PHP Login Form (with password encryption...)</h3>
    <br />
    <h3 align="center">Login</h3>
    <br />
    <form method="post" action="../dbConection_Login_Registration/registration_form.php">
        <label>Enter Username</label>
        <input type="text" name="username" class="form-control" placeholder="Username..." />
        <br />
        <label>Enter Password</label>
        <input type="password" name="password" class="form-control" placeholder="password..." />
        <br />
        <input type="text" name="firstName" class="form-control" placeholder="FirstName..." />
        <br />
        <input type="text" name="lastName" class="form-control" placeholder="LastName..."/>
        <br />
        <input type="text" name="email" class="form-control" placeholder="Email..."/>
        <br />
        <input type="submit" name="signup" value="Sign up" class="btn btn-info" />
        <br />
        <p align="center"><a href="../dbConection_Login_Registration/login.php">Login</a></p>
    </form>

</div>
</body>

</html>