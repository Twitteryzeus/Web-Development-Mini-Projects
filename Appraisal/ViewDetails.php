<?php 
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
        <title>View Details</title>
        <link href="CSS/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="CSS/indexCSS.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="./Image/Header_img.jpg" type="image/x-icon">
    </head>
    <style>
        .uploadarea{
            color: gray;
            background-color: #e6ffcc;
            padding-top: 25px;
            padding-bottom: 10px;
            border-radius: 25px;
        }
        
        .titlearea{
            background-color: #e6ffcc;
            padding-top: 25px;
            margin-top: 5%;
            color: gray;
            border-radius: 25px;
        }
    </style>
    <body style="background-image: url('./Image/homepage.jpg');background-position: center;">
        <ul class="nav nav-tabs">
            <li class="active"><a href="Home.php">Home</a></li>
            <li><a href="UploadDetails.php">Upload Details</a></li>
            <li><a href="ViewDetails.php">View Details</a></li>
            <li style="float: right;"><a href="Logout.php">Logout</a></li>
        </ul>
        <br>
        <div class="container">
            <div class="titlearea"><h2 align="center">Your Report</h2><br></div>
            <div class="table-responsive">          
  <table class="table uploadarea">
    <thead>
      <tr>
        <th>#</th>
        <th>Project Title</th>
        <th>Project Description</th>
        <th>Hours Spent</th>
        <th>Date</th>
      </tr>
    </thead>
    <?php
        include 'Database_connection.php';
        $qu="SELECT `projtitle`, `projdesc`, `prjtime`, `projdate` FROM `proj_master` WHERE `empid`='".$_SESSION['empid']."'";
        $r= mysqli_query($connect, $qu);
        $ser = 1;        
        while($row= mysqli_fetch_assoc($r))
        {
    ?>
    <tbody>
      <tr>
        <td><?php echo $ser;?></td>
        <td><?php echo $row['projtitle'];?></td>
        <td><?php echo $row['projdesc'];?></td>
        <td><?php echo $row['prjtime'];?></td>
        <td><?php echo $row['projdate'];?></td>
      </tr>
    </tbody>
    <?php
    $ser = $ser + 1;
    } ?>
  </table>
  </div>
        </div>
    </body>
</html>
