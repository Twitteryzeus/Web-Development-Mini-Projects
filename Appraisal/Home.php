<?php 
session_start();
if(!isset($_SESSION['empid']))
{
    echo '<script>window.location = "index.php";</script>';
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
        <title>Home</title>
        <link href="CSS/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/indexCSS.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="./Image/Header_img.jpg" type="image/x-icon">
    </head>
    <body style="background-image: url('./Image/homepage.jpg');background-position: center;">
        <ul class="nav nav-tabs">
            <li class="active"><a href="Home.php">Home</a></li>
            <li><a href="UploadDetails.php">Upload Details</a></li>
            <li><a href="ViewDetails.php">View Details</a></li>
            <li style="float: right;"><a href="Logout.php">Logout</a></li>
        </ul>
        <div class="container">
            <div class="imgcontainer">
                <center><img class="img-responsive" alt="welcome" src="./Image/welcome_PNG78.png"></center>
            </div>
        </div>
    </body>
</html>
