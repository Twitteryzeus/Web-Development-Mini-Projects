                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <?php 
session_start();
if(!isset($_SESSION['empid']))
{
    echo '<script>window.location = "index.php";</script>';
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
        <title>Upload Details</title>
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
            <li class="active"><a href="Home.php">Home</a></li>
            <li><a href="UploadDetails.php">Upload Details</a></li>
            <li><a href="ViewDetails.php">View Details</a></li>
            <li style="float: right;"><a href="Logout.php">Logout</a></li>
        </ul>
        <div class="container uploadarea">
  <h2>Upload Details Here</h2>
  <form action="#" method="POST">
    <div class="form-group">
      <label for="email">Project Title:</label>
      <input type="text" class="form-control" name="ptitle" placeholder="Enter Project Title" autofocus="true" pattern="[a-zA-z0-9 ]{5,50}" title="Enter more than 5 characters">
    </div>
    <div class="form-group">
      <label for="pwd">Project Description:</label>
      <textarea class="form-control" name="pdesc" placeholder="Enter Project Description" pattern="[a-zA-Z0-9.,-]{10,16}" title="Enter more than 10 characters"></textarea>
    </div>
    <div class="form-group">
      <label for="email">Time(in hours):</label>
      <input type="number" class="form-control" name="ptime" placeholder="Enter Time" pattern="[0-9]{5}">
    </div>
      <center><br><input type="submit" class="btn btn-default button2" name="updeat" value="Upload Details"></center>
  </form>
    </div>
    </body>
</html>
<?php 
if(isset($_POST['updeat']))
{
    include 'Database_connection.php';
    if($_POST['ptitle']!="" && $_POST['pdesc']!="" && $_POST['ptime']!="")
    {
        /*$stmt = $connect->prepare("INSERT INTO `proj_master`(`empid`, `projtitle`, `projdesc`, `prjtime`) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss", $empid, $projtitle, $projdesc, $prjtime);
        $empid = $_SESSION['empid'];
        $projtitle = $_POST['ptitle'];
        $projdesc = $_POST['pdesc'];
        $prjtime = $_POST['ptime'];
        $stmt->execute();*/
        
        $sql = "INSERT INTO `proj_master`(`empid`, `projtitle`, `projdesc`, `prjtime`, `projdate`) VALUES ('".$_SESSION['empid']."','".$_POST['ptitle']."','".$_POST['pdesc']."','".$_POST['ptime']."','".date("Y/m/d")."')";
        if ($connect->query($sql) === TRUE)
        {
            echo '<script LANGUAGE="JavaScript">alert("Updated Successfully.")</script>';
        }       
        else
        {
            echo '<script LANGUAGE="JavaScript">alert("Something went wrong.")</script>';
        }
    }
    else
    {
        echo '<script LANGUAGE="JavaScript">alert("Please fill all the details.")</script>';
    }
}
?>