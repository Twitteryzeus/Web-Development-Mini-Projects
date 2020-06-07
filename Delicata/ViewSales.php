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
        <title>View Sales</title>
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
            <center><h1>View Users Here</h1></center>
            <br><br>
        </div>
        <?php
            include 'Database_connection.php';
            $qu="select * from tbl_order_master";
            $r= mysqli_query($connect, $qu);
            
        ?>
        <div class="container">
            <div class="table-responsive">
                <!--<form action="ManageCake.php">-->
  <table class="table">
    <thead>
      <tr>
        <th>Order_ID</th>
        <th>Cust_ID</th>
        <th>CakeID</th>
        <th>Price</th>
      </tr>
    </thead>
    <?php 
        while($row= mysqli_fetch_assoc($r))
            {
                
            
    ?>
    <tbody>
      <tr>
    <form action="#" method="GET">   
        <td><div class="form-group"><input type="text" value="<?php echo $row['order_id']; ?>" class="form-control" name="cakeid" readonly="readonly">
          </div></td>
          <td><div class="form-group"><input type="text" value="<?php echo $row['cust_id']; ?>" class="form-control" name="price" readonly="readonly">
          </div></td>
          <td><div class="form-group"><input type="text" value="<?php echo $row['cakeid']; ?>" class="form-control" name="category" readonly="readonly">
          </div></td>
          <td><div class="form-group"><input type="text" value="<?php echo $row['price']; ?>" class="form-control" name="cakeid" readonly="readonly">
          </div></td>
    </form>
    </tr>
    </tbody>
    <?php 
        }
    ?>
  </table>
      <!--</form>-->
  </div>
        </div>
    </body>
</html>
