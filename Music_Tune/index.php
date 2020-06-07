<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Homepage</title>
        <link rel="icon" type="image" href="Images/Website_Logo.jpg">
        <link href="CSS/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    
    <body>
        <ul class="nav nav-tabs">
            <li><a href="index.php">Home</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Hindi Songs<span class="caret"> 
            </span></a>
            <ul class="dropdown-menu">
                <li><a href="#">Rock</a></li>
                <li><a href="#">Jazz</a></li>
                <li><a href="#">Classical</a></li>
            </ul>
            </li>
            <li><a href="#">Gujarati</a></li>
            <li><a href="#">Western</a></li>
            <li><a href="#">Arabic</a></li>
            <li><a href="Contact.php">Contact Us</a></li>
            <li style="float: right;"><a href="Registration.php">Sign Up</a></li>
            <li style="float: right;"><a href="Login.php">Login</a></li>
        </ul>
        <h1 align="center">Welcome to Music Tune</h1><br>
        <div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
          <img src="Images/Sli1.jpg" alt="With you this christmas" style="width:100%;height: 100%;">
      </div>

      <div class="item">
          <img src="Images/Sli2.jpg" alt="We are no the same" style="width:100%;height: 100%;">
      </div>
    
      <div class="item">
          <img src="Images/Sli3.jpg" alt="Christmas is here" style="width:100%;height: 100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
        </div>
    </div>
        
        <footer class="page-footer">
            <div class="footer-copyright text-center py-3">
                Developed by &copy;Lakkad Brijesh
            </div>
        </footer>
    </body>
</html>
