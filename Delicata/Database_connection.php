<?php
      $host="localhost";
      $user="root";
      $password="";
      $database="delicata";
      $connect= mysqli_connect($host, $user, $password, $database) OR exit('could not connect'. mysqli_connect_error());
?>