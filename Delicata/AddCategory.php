<?php 
session_start();
if($_SESSION['id']!="admin")
{
    echo '<script>window.location = "Admin_Login.php";</script>';
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
        <title>Add Category</title>
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
            <li><a href="AdminHomePage.php">Home</a></li>
            <li><a href="ManageCake.php">View Cakes</a></li>
            <li><a href="ManageCategory.php">View Category</a></li>
            <li><a href="ViewUsers.php">View Users</a></li>
            <li><a href="ViewSales.php">View Sales</a></li>
            <li style="float: right;"><a href="AdminLogout.php">Logout</a></li>
        </ul>
        </div>
        
        <div class="container">
            <center><h1>Add Your Category Here</h1>
            <!--<a href="#"><input type="submit" class="btn btn-danger" name="insert" value="Add Cake"></a>-->
            </center>
            <br><br>
        </div>
        
        <div class="container">
            <form action="#" method="POST">
            <div class="form-group">
            <label for="catname">Name:</label>
            <input type="text" class="form-control" name="name" placeholder="Enter name" pattern="[A-Za-z]{5,30}" required="required">
            </div>
    
            <div class="form-group">
            <label for="Description">Description:</label>
            <textarea style="resize: none;" class="form-control" name="desc" pattern="[0-9A-Za-z]{8,30}" placeholder="Enter Description" required="required"></textarea>
            </div>
            
            <input type="submit" class="btn btn-primary" name="submit" value="Add">
            </form>
        </div>
        
    </body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        include 'Database_connection.php';
        
        $stmt = $connect->prepare("INSERT INTO tbl_category_master (name) VALUES (?)");
        $stmt->bind_param("s", $category);
        $category = $_POST['name'];
        $stmt->execute();
    }
?>