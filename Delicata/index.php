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
        <h1 align="center">Welcome to Delicata</h1>
        <h3 align="center">Your destination for sweetness</h3>
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
          <img src="Images/10.jpg" alt="Photography" style="width:100%;height: 100%;">
      </div>

      <div class="item">
          <img src="Images/12.jpg" alt="Painting" style="width:100%;height: 100%;">
      </div>
    
      <div class="item">
          <img src="Images/13.jpg" alt="Sculpture" style="width:100%;height: 100%;">
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
        
        <div class="container">
            <h3>There are many different types of cakes and many different ways of dividing them into various categories, 
               but professional bakers categorize cakes by ingredients and mixing method. (Home bakers tend to categorize cakes by 
               flavoring—i.e., chocolate cakes, fruit cakes, and so on—which is helpful when you're trying to decide what to eat, 
               but not as helpful when you're trying to understand how best to make a cake.) Depending on how the better is prepared, 
               you will find that the final texture (and color, if it is a yellow or white cake) varies. Below is a comprehensive but by no 
               means exhaustive list of the basic types of cakes.</h3>
        </div>
        
        <footer class="page-footer">
            <div class="footer-copyright text-center py-3">
                Developed by &copy;Lakkad Brijesh & &copy;Raghav Bharucha.
            </div>
        </footer>
    </body>
</html>
