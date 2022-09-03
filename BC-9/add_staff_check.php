<?php
session_start(); 
include('connect.php');

if (isset($_POST['btnlogin']))
{
  $email=$_POST['email'];
  $Mlogin="SELECT * FROM managertable WHERE managerEmail='$email'";
  $Mlogin_run=mysqli_query($connect,$Mlogin);
  $count=mysqli_num_rows($Mlogin_run);

  if ($count>0) 
  {
    foreach($Mlogin_run as $data)
    {
      $mid=$data['managerID'];
      $name=$data['managerName'];
      $email=$data['managerEmail'];
      $txtdp=$data['departmentName'];
    }
    $_SESSION['auth'] = true;
    $_SESSION['auth_dp'] = "$txtdp";
    $_SESSION['auth_user'] = [
      'mid'=>$mid,
      'name'=>$name,
      'email'=>$email,
    ];
    if($_SESSION['auth_dp'] == 'Marketing')
    {
      echo "<script><option value='Marketing'>Marketing</option>;</script>";
    }
?>