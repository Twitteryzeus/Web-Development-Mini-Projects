<?php 
session_start();
if(!isset($_SESSION['empid']))
{
    echo '<script>window.location = "MngLogin.php";</script>';
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
        <title>Give Appraisal</title>
        <link href="CSS/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/indexCSS.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="./Image/Header_img.jpg" type="image/x-icon">
    </head>
    <style>
        .uploadarea{
            color: gray;
            background-color: #e6ffcc;
            margin-top: 5%;
            padding-bottom: 50px;
            padding-top: 50px;
            border-radius: 25px;
        }
        
        textarea{
            resize: none;
        }
    </style>
    <body style="background-image: url('./Image/homepage.jpg');background-position: center;">
        <ul class="nav nav-tabs">
            <li class="active"><a href="MnHome.php">Home</a></li>
            <li><a href="MnAppraise.php">Give Appraisal</a></li>
            <li><a href="MnViewDetails.php">View Details</a></li>
            <li style="float: right;"><a href="Logout.php">Logout</a></li>
        </ul>
        <div class="container uploadarea">
    <h2>Give Appraisal</h2>
    <form action="#" method="POST">
    <div class="form-group">
      <label for="email">Name of Employees:</label>
      <select class="form-control" name="ename">
          <option value="None">-- SELECT --</option>
          <?php
            include 'Database_connection.php';
            $qu="SELECT `flname` FROM `emp_records`";
            $r= mysqli_query($connect, $qu);
            while($row= mysqli_fetch_assoc($r))
            {
          ?>
          <option value="<?php echo $row['flname']; ?>"><?php echo $row['flname']; ?></option>
          <?php }?>
      </select>
    </div>
    <div class="form-group">
      <label for="pwd">Appraisal:</label>
      <input type="text" class="form-control" name="appris" placeholder="Enter Appraisal" pattern="[1-9][0-9]{2,8}" title="Appraisal more than 100Rs">
    </div>
    <input type="submit" class="btn btn-default button2" name="submit" value="Submit">
    </form>
    </div>
    </body>
</html>
<?php 
if(isset($_POST['submit']))
{
    if($_POST['ename']=="None" && $_POST['appris']=="")
    {
        echo '<script LANGUAGE="JavaScript">alert("Give a proper employee name.\nEnter Amount.")</script>';
    }
    else if($_POST['ename']=="None")
    {
        echo '<script LANGUAGE="JavaScript">alert("Give a proper employee name.")</script>';
    }
    else if($_POST['appris']=="")
    {
        echo '<script LANGUAGE="JavaScript">alert("Enter Amount.")</script>';
    }
    else
    {
        $sql = "UPDATE `emp_records` SET `salary`=`salary`+'".$_POST['appris']."' WHERE `flname`='".$_POST['ename']."'";
        if ($connect->query($sql) === TRUE)
        {
            echo '<script LANGUAGE="JavaScript">alert("Updated Successfully.")</script>';
        }       
        else
        {
            echo '<script LANGUAGE="JavaScript">alert("Something went wrong.")</script>';
        }
    }
}
?>