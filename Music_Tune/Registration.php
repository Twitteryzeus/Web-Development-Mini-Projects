<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration</title>
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
       </ul><br>
       
       <div class="container">
            <h2>Register Here</h2>
            <form action="#">
            <div class="form-group">
            <label for="firstname">FirstName:</label>
            <input type="text" class="form-control" id="fname" placeholder="Enter Firstname" required="required">
            </div>
                
            <div class="form-group">
            <label for="lastname">LastName:</label>
            <input type="text" class="form-control" id="lname" placeholder="Enter Lastname" required="required">
            </div>
                
            <div class="form-group">
            <label for="mobilenumber">Mobile Number:</label>
            <input type="text" class="form-control" id="mobno" placeholder="Enter Mobile Number" required="required">
            </div>
                
            <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter E-Mail" required="required">
            </div>
    
            <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" required="required">
            </div>
    
            <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>
        </div>
       
       <footer class="page-footer">
            <div class="footer-copyright text-center py-3">
                Developed by &copy; Lakkad Brijesh
            </div>
        </footer>
    </body>
</html>
