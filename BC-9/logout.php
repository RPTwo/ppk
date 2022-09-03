<?php 
session_start();
include('connect.php');
session_destroy();

 echo "<script> alert('Logout'); window.location.assign('manager_login.php'); </script>";

 ?>