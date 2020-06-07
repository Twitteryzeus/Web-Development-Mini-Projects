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
        <title>Registration</title>
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
            <h2>Register Here</h2>
            <form action="#" method="POST">
            <div class="form-group">
            <label for="firstname">FirstName:</label>
            <input type="text" class="form-control" name="fname" placeholder="Enter Firstname" pattern="[a-zA-Z]{3,30}" required="required">
            </div>
                
            <div class="form-group">
            <label for="lastname">LastName:</label>
            <input type="text" class="form-control" name="lname" pattern="[a-zA-Z]{3,30}" placeholder="Enter Lastname" required="required">
            </div>
                
            <div class="form-group">
            <label for="mobilenumber">Mobile Number:</label>
            <input type="text" class="form-control" name="mobno" pattern="[0-9]{10}" placeholder="Enter Mobile Number" required="required">
            </div>
                
            <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" placeholder="Enter E-Mail" required="required">
            </div>
    
            <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="pwd" pattern="[0-9A-Za-z@]{8,30}" placeholder="Enter password" required="required">
            </div>
                
            <div class="form-group">
            <label for="pwd">Confirm Password:</label>
            <input type="password" class="form-control" name="repwd" pattern="[0-9A-Za-z@]{8,30}" placeholder="Confirm password" required="required">
            </div>
    
            <input type="submit" class="btn btn-primary" value="Sign Up" name="submit">
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
    include 'Database_connection.php';
    
    if(isset($_POST['submit']))
    {
        if($_POST['pwd']!=$_POST['repwd'])
        {
            echo '<script LANGUAGE="JavaScript">alert("Passwords didnt match")</script>';
        }
        else
        {
            $stmt = $connect->prepare("INSERT INTO tbl_customer_registration (fname,lname,mob_no,email_id,passwd) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $firstname, $lastname, $mob_no, $email, $passwd);
            $firstname = $_POST['fname'];
            $lastname = $_POST['lname'];
            $mob_no = $_POST['mobno'];
            $email = $_POST['email'];
            $passwd = $_POST['pwd'];
            $stmt->execute();
        }
    }
?>