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
        <link href="CSS/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image" href="Images/Website_Logo.jpg">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <ul class="nav nav-tabs">
            <li><a href="index.php">Home</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Art works<span class="caret"> 
            </span></a>
            <ul class="dropdown-menu">
                <li><a href="Painting.php">Painting</a></li>
                <li><a href="Sculpture.php">Sculpture</a></li>
                <li><a href="Photography.php">Photography</a></li>
            </ul>
            </li>
            <li><a href="Artist.php">Artists</a></li>
            <li><a href="#">Collection</a></li>
            <li style="float: right;"><a href="Registration.php">Sign Up</a></li>
            <li style="float: right;"><a href="Login.php">Login</a></li>
        </ul>
        <h1 align="center">Welcome to Art Gallery</h1><br>
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
          <img src="Images/Sculp1.jpg" alt="Photography" style="width:100%;height: 100%;">
      </div>

      <div class="item">
          <img src="Images/Sculp2.jpg" alt="Painting" style="width:100%;height: 100%;">
      </div>
    
      <div class="item">
          <img src="Images/Sculp3.jpg" alt="Sculpture" style="width:100%;height: 100%;">
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
    </body>
</html>
