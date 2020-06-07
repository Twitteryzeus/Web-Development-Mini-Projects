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
        <title>Admin Login</title>
        <link href="CSS/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image" href="Images/Logo.png">
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
        <div class="container">
            <h2>Admin Login Here</h2>
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
        if($_POST['email']=="admin@gmail.com" && $_POST['pwd']=="admin1234")
        {
            $_SESSION['id']="admin";
            echo '<script>window.location = "AdminHomePage.php";</script>';
        }
        else
        {
            echo '<script LANGUAGE="JavaScript">alert("Invalid Credentials")</script>';
        }
    }
?>