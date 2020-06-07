<?php 
session_start();
if($_SESSION['custid']==NULL)
{
    echo '<script>window.location = "Login.php";</script>';
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Your Cart</title>
        <link href="CSS/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image" href="Images/Logo.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
        <script type='text/javascript' src='loadImg.js'></script>
        <script type='text/javascript'>
            $(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
        </script>
        <style>
            .no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
        .se-pre-con {
                position: fixed;
                left: 0px;
                top: 0px;
                width: 100%;
                height: 100%;
                z-index: 9999;
                background: url('Images/source.gif') center no-repeat #fff;
        }
        </style>
    </head>
    <body>
        <div class="se-pre-con"></div>
        <ul class="nav nav-tabs">
            <li><a href="index.php">Home</a></li>
            <li><a href="Cakes.php">Cakes</a></li>
            <li><a href="CartPage.php">View Your Cart</a></li>
            <li><a href="AboutUs.php">About Us</a></li>
            <li style="float: right;"><a href="Logout.php">Logout</a></li>
            <li class="dropdown" style="float: right;"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Not a Member<span class="caret"> 
            </span></a>
            <ul class="dropdown-menu">
                <li><a href="Login.php">Login</a></li>
                <li><a href="Registration.php">Register</a></li>
            </ul>
            </li>
        </ul>
        <div class="container">
            <center><h2>Get your cart here!!</h2></center><hr><br>
            <div class="row">
                <?php
                    include 'Database_connection.php';
                    $qu="select * from tbl_cart_master where cust_id='".$_SESSION['custid']."'";
                    $r= mysqli_query($connect, $qu);
                    $temp=1;
                    while($row= mysqli_fetch_assoc($r))
                    {
                        if($temp%4==0)
                        {
                            echo "<br>";
                        }
                ?>
                <div class="col-sm-3">
                <img src="Images/<?php echo $row['cakeid']; ?>.jpg" class="img-rounded" alt="but1" height="150px" width="150px">
                <h3><?php echo $row['price']; ?>$</h3>
                <a href="CartPage.php?cakeid=<?php echo $row['cakeid']; ?>&price=<?php echo $row['price']; ?>&buy='buy'"><input type="submit" class="btn btn-primary" name="buy" value="Buy"></a>
                </div>
                
                <?php
                
                $temp=$temp+1;
                        }
                ?>
            </div>
        </div>
        <footer class="page-footer">
            <div class="footer-copyright text-center py-3">
                Developed by &copy;Lakkad Brijesh & &copy;Raghav Bharucha.
            </div>
        </footer>
    </body>
</html>
<?php
if(isset($_GET['buy']))
{
            $stmt = $connect->prepare("INSERT INTO tbl_order_master (cust_id,cakeid,price) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $cust_id, $cakeid, $price);
            $cust_id = $_SESSION['custid'];
            $cakeid = $_GET['cakeid'];
            $price = $_GET['price'];
            $stmt->execute();
            
            $stmt = $connect->prepare("DELETE FROM tbl_cart_master where cust_id=? and cakeid=?");
            $stmt->bind_param("ss", $cust_id,$cakeid);
            $cust_id = $_SESSION['custid'];
            $cakeid = $_GET['cakeid'];
            $stmt->execute();
            
            echo '<script LANGUAGE="JavaScript">alert("Thanks for the purchase!!")</script>';
}
?>