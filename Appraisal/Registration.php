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
        <title>Registration</title>
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
  <h2>Register Here</h2>
  <form action="#" method="POST">
    <div class="form-group">
      <label for="email">Full Name:</label>
      <input type="text" class="form-control" name="flname" placeholder="Enter Full Name" autofocus="true" pattern="[a-zA-Z ]{5,50}">
    </div>
    <div class="form-group">
      <label for="email">Mobile Number:</label>
      <input type="text" class="form-control" name="monum" placeholder="Enter Mobile Number" pattern="[0-9]{10}">
    </div>
    <div class="form-group">
      <label for="email">Salary(Current*/OnJoin*):</label>
      <input type="number" class="form-control" name="sal" placeholder="Enter your current salary" pattern="[0-9]{4,10}">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="pwd" placeholder="Enter password" pattern="[a-zA-Z0-9@]{8,16}">
    </div>
    <div class="form-group">
      <label for="pwd">Confirm Password:</label>
      <input type="password" class="form-control" name="copwd" placeholder="Re-Enter password" pattern="[a-zA-Z0-9@]{8,16}">
    </div>
    <input type="submit" class="btn btn-default button2" name="submit" value="Register">
    <input type="submit" class="btn btn-default button2" name="already" value="Already Registered">
  </form>
        </div><br><br><br><br><br><br><br>
    </body>
</html>
<?php 
if(isset($_POST['submit']))
{
    include 'Database_connection.php';
    if($_POST['flname']!="" && $_POST['monum']!="" && $_POST['sal']!="" && $_POST['email']!="" && $_POST['pwd']!="" && $_POST['copwd']!="")
    {
        $query="select count(*) from emp_records where email=?";
        $stmt= mysqli_prepare($connect, $query);
        mysqli_stmt_bind_param($stmt, "s", $_POST['email']);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $num);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);
        if($num==0)
        {
            if($_POST['pwd']==$_POST['copwd'])
            {
                $stmt = $connect->prepare("INSERT INTO `emp_records`(`flname`, `monum`, `salary`, `email`, `passwd`) VALUES (?,?,?,?,?)");
                $stmt->bind_param("sssss", $flname, $monum, $salary, $email, $passwd);
                $flname = $_POST['flname'];
                $monum = $_POST['monum'];
                $salary = $_POST['sal'];
                $email = $_POST['email'];
                $passwd = $_POST['pwd'];
                $stmt->execute();
                echo '<script LANGUAGE="JavaScript">alert("Successfully Added.")</script>';
            }
            else
            {
                echo '<script LANGUAGE="JavaScript">alert("Password did not match.")</script>';
            }
        }
        else 
        {
            echo '<script LANGUAGE="JavaScript">alert("This email id already exists.")</script>';
        }
    }
    else
    {
        echo '<script LANGUAGE="JavaScript">alert("Please fill all the Details.")</script>';
    }
}
if(isset($_POST['already']))
{
    echo '<script>window.location = "index.php";</script>';
}
?>