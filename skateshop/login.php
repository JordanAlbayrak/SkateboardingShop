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
    <form method="post" action="selectOneRecord.php">
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
</div>
</body>

</html>
