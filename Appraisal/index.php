<?php 
session_start();
if(isset($_SESSION['empid']))
{
    echo '<script>window.location = "Home.php";</script>';
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
        <title>Login</title>
        <link href="CSS/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/indexCSS.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="./Image/Header_img.jpg" type="image/x-icon">
    </head>
    <body style="background-color: #ccccff">
        
        <ul class="nav nav-tabs">
            <li class="active"><a href="Home.php">Home</a></li>
            <li><a href="UploadDetails.php">Upload Details</a></li>
            <li><a href="ViewDetails.php">View Details</a></li>
        </ul>
        <div class="container">
            <div class="imgcontainer">
                <a href="MngLogin.php"><img src="./Image/img_avatar2.png" alt="Avatar" class="avatar"></a>
            </div>
        </div>
        <div class="container">
  <h2>Login Here</h2>
  <form action="#" method="POST">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Enter email" autofocus="true">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="pwd" placeholder="Enter password" pattern="[a-zA-Z0-9@]{8,16}">
    </div>
    <input type="submit" class="btn btn-default button2" name="submit" value="Login">
    <input type="submit" class="btn btn-default button2" name="regist" value="Register">
  </form>
    </div>
    </body>
</html>
<?php 

    include 'Database_connection.php';
    if(isset($_POST['submit']))
    {
        if($_POST['email']!="" && $_POST['pwd']!="")
        {
            $query="select empid from emp_records where email=? and passwd=?";
            $stmt= mysqli_prepare($connect, $query);
            mysqli_stmt_bind_param($stmt, "ss", $_POST['email'], $_POST['pwd']);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $empid);
            mysqli_stmt_fetch($stmt);
            mysqli_stmt_close($stmt);
            if($empid!=0 || $empid!=NULL)
            {
                echo '<script LANGUAGE="JavaScript">alert("Welcome.")</script>';
                echo '<script>window.location = "Home.php";</script>';
                $_SESSION['empid']=$empid;
            }
            else
            {
                echo '<script LANGUAGE="JavaScript">alert("Invalid credentials.")</script>';
            }
        }
        else
        {
            echo '<script LANGUAGE="JavaScript">alert("Please fill all the details.")</script>';
        }
    }
    if(isset($_POST['regist']))
    {
        echo '<script>window.location = "Registration.php";</script>';
    }
?>