<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pound Cakes</title>
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
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Cakes<span class="caret"> 
            </span></a>
            <ul class="dropdown-menu">
                <li><a href="ButterCakes.php">Butter Cake</a></li>
                <li><a href="PoundCake.php">Pound Cake</a></li>
                <li><a href="SpongeCakes.php">Sponge Cake</a></li>
                <li><a href="GenoiseCakes.php">Genoise Cake</a></li>
            </ul>
            </li>
            <li><a href="#">Contact</a></li>
            <li><a href="AboutUs.php">About Us</a></li>
            <li style="float: right;"><a href="Registration.php">Sign Up</a></li>
            <li style="float: right;"><a href="Login.php">Login</a></li>
        </ul><br>
        
        <div class="container">
            <h2 align="center">Pound&nbsp;Cakes</h2><hr><br>
            <div class="row">
            
            <div class="col-sm-3">
                <img src="Images/Po1.jpg" class="img-rounded" alt="but1" height="150px" width="150px">
                <h3>50$</h3>
                <button type="submit" class="btn btn-primary">Buy</button>
                <button type="submit" class="btn btn-primary">Add to Cart</button>
            </div>
                
            <div class="col-sm-3">
                <img src="Images/Po2.jpg" class="img-rounded" alt="but2" height="150px" width="150px">
                <h3>75$</h3>
                <button type="submit" class="btn btn-primary">Buy</button>
                <button type="submit" class="btn btn-primary">Add to Cart</button>
            </div>
                
            <div class="col-sm-3">
                <img src="Images/Po3.jpg" class="img-rounded" alt="but3" height="150px" width="150px">
                <h3>70$</h3>
                <button type="submit" class="btn btn-primary">Buy</button>
                <button type="submit" class="btn btn-primary">Add to Cart</button>
            </div>
                
            <div class="col-sm-3">
                <img src="Images/Po4.jpg" class="img-rounded" alt="but4" height="150px" width="150px">
                <h3>50$</h3>
                <button type="submit" class="btn btn-primary">Buy</button>
                <button type="submit" class="btn btn-primary">Add to Cart</button>
            </div>
                   
            </div>
            <br><br>
            <div class="row">
            
            <div class="col-sm-3">
                <img src="Images/Po5.jpg" class="img-rounded" alt="but1" height="150px" width="150px">
                <h3>50$</h3>
                <button type="submit" class="btn btn-primary">Buy</button>
                <button type="submit" class="btn btn-primary">Add to Cart</button>
            </div>
                
            <div class="col-sm-3">
                <img src="Images/Po6.jpg" class="img-rounded" alt="but2" height="150px" width="150px">
                <h3>75$</h3>
                <button type="submit" class="btn btn-primary">Buy</button>
                <button type="submit" class="btn btn-primary">Add to Cart</button>
            </div>
                
            <div class="col-sm-3">
                <img src="Images/Po7.jpg" class="img-rounded" alt="but3" height="150px" width="150px">
                <h3>70$</h3>
                <button type="submit" class="btn btn-primary">Buy</button>
                <button type="submit" class="btn btn-primary">Add to Cart</button>
            </div>
                
            <div class="col-sm-3">
                <img src="Images/Po8.jpg" class="img-rounded" alt="but4" height="150px" width="150px">
                <h3>50$</h3>
                <button type="submit" class="btn btn-primary">Buy</button>
                <button type="submit" class="btn btn-primary">Add to Cart</button>
            </div>
                
            </div>
        </div>
        <br><br>
        <footer class="page-footer">
            <div class="footer-copyright text-center py-3">
                Developed by &copy;Lakkad Brijesh & &copy;Raghav Bharucha.
            </div>
        </footer>
    </body>
</html>
