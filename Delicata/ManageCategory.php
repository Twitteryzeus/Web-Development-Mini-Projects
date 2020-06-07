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
        <title>View Category</title>
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
            <center><h1>View Your Category Here</h1>&nbsp;<p>Please refresh the page once value entered.</p>
                <a href="AddCategory.php"><input type="submit" class="btn btn-danger" name="insert" value="Add Category"></a>
            </center>
            <br><br>
        </div>
        <?php
            include 'Database_connection.php';
            $qu1="select * from tbl_category_master";
            $r1= mysqli_query($connect, $qu1);
        ?>
        <div class="container">
            <div class="table-responsive">
            <table class="table">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <?php 
        while($row= mysqli_fetch_assoc($r1))
            {
                
            
    ?>
    <tbody>
      <tr>
    <form action="#" method="GET">
        <td><div class="form-group"><input type="text" value="<?php echo $row['catid']; ?>" class="form-control" name="catid" readonly="readonly">
          </div></td>
          <td><div class="form-group"><input type="text" value="<?php echo $row['name']; ?>" class="form-control" name="category" placeholder="Enter Category Name" pattern="[a-zA-Z]{3,30}" required="required">
          </div></td>
          <td><input type="submit" class="btn btn-primary" name="update" value="Update"></td>
          <td><input type="submit" class="btn btn-primary" name="delete" value="Delete"></td>
          </form>
    </tr>
    </tbody>
    <?php 
        }
    ?>
  </table>
  </div>
        </div>
    </body>
</html>
<?php 
if(isset($_GET['update']))
{
        include 'Database_connection.php';
        $query="UPDATE `tbl_category_master` SET `name`=? WHERE `catid`=?";
        $stmt= mysqli_prepare($connect, $query);
        mysqli_stmt_bind_param($stmt, "ss", $_GET['category'], $_GET['catid']);
        mysqli_stmt_execute($stmt);
        //mysqli_stmt_bind_result($stmt, $num);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);
}

if(isset($_GET['delete']))
{
        include 'Database_connection.php';
        $stmt = $connect->prepare("DELETE FROM `tbl_category_master` WHERE catid=?");
        $stmt->bind_param("s", $id);
        $id = $_GET['catid'];
        $stmt->execute();
}
?>