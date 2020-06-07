<?php
include 'Database_connection.php';
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
        <title>View Details</title>
        <link href="CSS/bootstrap.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
            color: gray;
            border-radius: 25px;
            margin-top: 5%;
        }
    </style>
    <body style="background-image: url('./Image/homepage.jpg');background-position: center;">
        <ul class="nav nav-tabs">
            <li class="active"><a href="MnHome.php">Home</a></li>
            <li><a href="MnAppraise.php">Give Appraisal</a></li>
            <li><a href="MnViewDetails.php">View Details</a></li>
            <li style="float: right;"><a href="Logout.php">Logout</a></li>
        </ul>
        <br>
        <div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Search</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Search based on year/month.</h4>
        </div>
        <div class="modal-body">
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="email">Select a year:</label>
                    <input type="number" class="form-control" min="1900" max="2099" step="1" name="year" value="2016" pattern="[1-9][0-9]{3}"/>
                </div>
                <div class="form-group">
                    <label for="email">Select a month:</label>
                    <input type="number" class="form-control" min="1" max="12" step="1" name="month" value="1" pattern="[1-9][0-9]{0,1}"/>
                </div>
                <input type="submit" class="btn btn-default button2" name="sreport" value="Submit">
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div>
      
        </div>
        </div>
  
        </div>
        <div class="container">
            <div class="titlearea"><h2 align="center">Employee's Report</h2><br></div>
            <div class="table-responsive">          
  <table class="table uploadarea">
    <thead>
      <tr>
        <th>#</th>
        <th>Employee's Name</th>
        <th>Project Title</th>
        <th>Project Description</th>
        <th>Hours Spent</th>
        <th>Employee's Salary</th>
      </tr>
    </thead>
   <?php
        $qu="SELECT emp_records.flname, emp_records.salary, proj_master.projtitle, proj_master.projdesc, proj_master.prjtime FROM emp_records INNER JOIN proj_master ON emp_records.empid=proj_master.empid ";
        $r= mysqli_query($connect, $qu);
        $ser = 1;        
        while($row= mysqli_fetch_assoc($r))
        {
    ?>
    <tbody>
      <tr>
        <td><?php echo $ser;?></td>
        <td><?php echo $row['flname']; ?></td>
        <td><?php echo $row['projtitle'];?></td>
        <td><?php echo $row['projdesc'];?></td>
        <td><?php echo $row['prjtime'];?></td>
        <td><?php echo $row['salary'];?></td>
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
