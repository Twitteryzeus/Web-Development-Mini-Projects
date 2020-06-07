<?php
session_start();

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
        <title>Login</title>
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
        <div>
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
        </div>
        
        <div class="container">
            <h2>Login Here</h2>
            <form action="#" method="POST">
            <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email" required="required">
            </div>
    
            <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="pwd" pattern="[0-9A-Za-z@]{8,30}" placeholder="Enter password" required="required">
            </div>
            
            <input type="submit" class="btn btn-primary" name="submit" value="Login">
            </form>
        </div>
        
        <footer class="page-footer">
            <div class="footer-copyright text-center py-3">
                Developed by &copy;Lakkad Brijesh & &copy;Raghav Bharucha.
            </div>
        </footer>
        
    </body>
</html>
<?php 
if(isset($_POST['submit']))
{
            include 'Database_connection.php';
            
            $query="select Cust_ID from tbl_Customer_Registration where email_id=? and passwd=?";
            $stmt= mysqli_prepare($connect, $query);
            mysqli_stmt_bind_param($stmt, "ss", $_POST['email'], $_POST['pwd']);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $num);
            mysqli_stmt_fetch($stmt);
            mysqli_stmt_close($stmt);
            
            if($num!=0)
            {
                $_SESSION['custid']=$num;
                echo '<script LANGUAGE="JavaScript">alert("Welcome")</script>';
                echo '<script>window.location = "index.php";</script>';
            }
            else
            {
                echo '<script LANGUAGE="JavaScript">alert("Invalid Credentials")</script>';
            }
            
            
}
?>