<?php
session_start(); 
include('connect.php');

if (isset($_POST['btnlogin']))
{
  $email=$_POST['email'];
  $pass=$_POST['password'];

  $Mlogin="SELECT * FROM managertable WHERE managerEmail='$email' AND managerPassword='$pass' LIMIT 1";
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
    if($_SESSION['auth_dp'] == 'Management')
    {
      echo "<script>window.location.assign('management_form.php'); </script>";
    }
    elseif ($_SESSION['auth_dp'] == 'Marketing') 
    {
      echo "<script>window.location.assign('marketing_form.php'); </script>";
    }
    elseif ($_SESSION['auth_dp'] == 'Technical') 
    {
      echo "<script>window.location.assign('technical_form.php'); </script>";
    }
    elseif ($_SESSION['auth_dp'] == 'Finance') 
    {
      echo "<script>window.location.assign('finance_form.php'); </script>";
    }
    elseif ($_SESSION['auth_dp'] == 'HR') 
    {
      echo "<script>window.location.assign('HR_form.php'); </script>";
    }
    elseif ($_SESSION['auth_dp'] == 'Support') 
    {
      echo "<script>window.location.assign('support_form.php'); </script>";
    }
  }
  else
  {
    echo "<script> alert ('Wrong Information');window.location.assign('manager_login.php'); </script>";
  }

}
else
{
    echo "<script> alert ('Your Are Not Manager');window.location.assign('index.php'); </script>";
}
?>