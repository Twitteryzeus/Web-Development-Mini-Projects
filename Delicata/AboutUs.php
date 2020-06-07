<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>About Us</title>
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
        
        .sourceit{
            margin-top: -25px;
            color: #fff;
            margin-right: 325px;
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
        <h2 align="center">About Delicata</h2><hr>
        <div class="container">
            <center><img src="Images/About Us.jpg" alt="aboutus" class="img-responsive" height="350px" width="450px">
                <p class="sourceit">CC:Swapnll Dwivedi</p>
                <h3>We here at Delicata try that our customer's sweet tooth is satisfied by the variety of dishses we provide. Our
                customer must get the result of the price he/she pays. The price we offer to our customer are thought in such a way that
                a comman man to a privelege person can afford it.
                </h3>
            </center>
        </div>
        <br><br>
        <footer class="page-footer">
            <div class="footer-copyright text-center py-3">
                Developed by &copy;Lakkad Brijesh & &copy;Raghav Bharucha.
            </div>
        </footer>
        
    </body>
</html>
