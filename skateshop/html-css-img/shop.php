<?php
session_start();
$mySqlhost = "localhost:3307"; //127.0.0.1
$username = "root";
$password = "";
$myDB = "test";
$charset = "utf8mb4";
$dsn = "mysql:host=$mySqlhost;dbname=$myDB;charset=$charset"; //data source name
try {
    $connect = new PDO($dsn, $username, $password);
    // set the PDO error mode to exception
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "<h1 class=\"text-danger\">Connection failed: </h1>" . "<p>" . $e->getMessage() . "</p>";
    //throw new PDOException($e->getMessage());
}
if (isset($_POST['deleteId'])) {
    $key=array_search($_POST['deleteId'],$_SESSION['cart']);
    if($key!==false)
        unset($_SESSION['cart'][$key]);
    $_SESSION["cart"] = array_values($_SESSION["cart"]);
}


$quantity[1]=0;
$quantity[2]=0;
$quantity[4]=0;
$quantity[5]=0;

foreach ($_SESSION['cart'] as $item){
if($item == 1){
    $quantity[1]= $quantity[1] + 1;
}
    if($item == 2){
        $quantity[2]= $quantity[2] + 1;
    }
    if($item == 4){
        $quantity[4]= $quantity[4] + 1;
    }
    if($item == 5){
        $quantity[5]= $quantity[5] + 1;
    }
}
$finalcart = array_unique($_SESSION['cart']);




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
        Skater Crew Shop Cart
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
                        <a class="link nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="link nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="skateboards.php">Skateboards</a>
                            <a class="dropdown-item" href="profile.php">Longboards</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href = "contact.php">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="tbl">
        <h3>Order Details</h3>
        <div class="table-danger">
            <table class="table table-bordered">
                <tr>
                    <th width="40%">Item Name</th>
                    <th width="10%">Quantity</th>
                    <th width="20%">Price</th>
                    <th width="20%">Total</th>
                </tr>
                <?php
                if(!empty($finalcart))
                {
                    $total = 0;
                    foreach($finalcart as $items)
                    {
                        $sqlSkates = 'SELECT * from test.skateboards WHERE skateId = ?';
                        $getSkates = $connect->prepare($sqlSkates);
                        $getSkates->execute([$items]);
                        $skates = $getSkates->fetchAll();

//for longboards
//                        $sqlSkatesL = 'SELECT * from test.longboards WHERE longBId = ?';
//                        $getSkatesL = $connect->prepare($sqlSkates);
//                        $getSkatesL->execute([$items]);
//                        $skatesL = $getSkatesL->fetchAll();
                        ?>
                        <tr>
                            <td><?php echo $skates[0]["name"]; ?></td>
                            <td><?php echo $quantity[$items]; ?></td>
                            <td>$ <?php echo $skates[0]["price"]; ?></td>
                            <td>$ <?php echo number_format($quantity[$items] * $skates[0]["price"], 2); ?></td>
                            <td>
                                <form action="" method="post">
                                    <button type="submit" name="deleteId" id="deleteId" value="<?php echo $items; ?>">Remove</button>
                                </form>
                            </td>
                        </tr>
                        <?php
                        $total = $total + ($quantity[$items] * $skates[0]["price"]);
                    }
                    ?>
                    <tr>
                        <td style="text-align: right;" colspan="3" >Total</td>
                        <td style="text-align: right;">$ <?php echo number_format($total, 2); ?></td>
                        <td></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
        </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
</body>
</html>
<?php
$connect = null;
?>