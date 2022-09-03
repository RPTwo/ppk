<?php
session_start(); 
include('header.php');


if (isset($_POST['btnlogin']))
{
  $email=$_POST['txtemail'];
  $pass=$_POST['txtpassword'];

  $select="SELECT * FROM stafftable WHERE staffEmail='$email' and staffPassword='$pass'";
  $run=mysqli_query($connect,$select);
  $count=mysqli_num_rows($run);

  if ($count>0)
  {
    $row=mysqli_fetch_array($run);
    $_SESSION['staffID']=$row['staffID'];
    $_SESSION['staffEmail']=$row['staffEmail'];
    echo "<script> alert ('Login Successfully');window.location.assign('staff_form.php'); </script>";
  }
  else
  {
    echo "<script> alert('TRY AGAIN'); </script>";
  }

}
?>

<form action='staff_login.php' method='POST' class="form-sample">
<div class="row">
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Email</label>
      <div class="col-sm-9">
        <input name='txtemail' type="text" class="form-control" />
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6">
    <div class="form-group row">
      <label class="col-sm-3 col-form-label">Password</label>
      <div class="col-sm-9">
        <input name='txtpassword' type="password" class="form-control" />
      </div>
    </div>
  </div>
</div>


<input Name='btnlogin' value='Login' type="submit" class="btn btn-success mr-2">
<button class="btn btn-light">Cancel</button>
</form>
<?php 
include('footer.php');
?>