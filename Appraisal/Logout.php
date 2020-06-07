<?php
if($_SESSION['empid']=="itsadmin")
{
    session_start();
    session_destroy();
    echo '<script>window.location = "MnLogin.php";</script>';
}
else
{
    session_start();
    session_destroy();
    echo '<script>window.location = "index.php";</script>';
}
?>