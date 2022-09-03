<?php
session_start();
include('header.php');


if (isset($_POST['btnsave']))
{
  $txtname=mysqli_real_escape_string($connect,$_POST['name']);
  $txtphone=mysqli_real_escape_string($connect,$_POST['phone']);
  $txtadd=mysqli_real_escape_string($connect,$_POST['address']);
  $txtedu=mysqli_real_escape_string($connect,$_POST['EDU']);
  $txtpos=mysqli_real_escape_string($connect,$_POST['position']);
  $txtslary=mysqli_real_escape_string($connect,$_POST['slary']);
  $txtpro=mysqli_real_escape_string($connect,$_POST['project']);
  $txtemail=mysqli_real_escape_string($connect,$_POST['email']);
  $txtdp=mysqli_real_escape_string($connect,$_POST['department']);
  $pass=mysqli_real_escape_string($connect,$_POST['password']);

  $image=$_FILES['img']['name'];
  $folder="profile/";
    if($image)
    {
      $imgfile=$folder."_".$image;
      $copied=copy($_FILES['img']['tmp_name'],$imgfile);
      if(!$copied)
      {
        exit("Problem occured, Can't upload Image");
      }

    }
    if($txtemail != 0)
    {
      $checkemail = "SELECT * FROM managertable WHERE managerEmail='$txtemail'";
      $checkemail_run=mysqli_query($connect,$checkemail);
      $count=mysqli_num_rows($checkemail_run);
      if ($count>0)
      {
        echo "<script> alert ('Email Already Exists');</script>";
      }
      else
      {
        $insert="INSERT INTO managertable(managerName,managerProfile,managerPhone,managerAddress,managerEDU,managerPosition,managerSlary,managerProject,managerEmail,managerPassword,departmentName) VALUES ('$txtname','$imgfile','$txtphone','$txtadd','$txtedu','$txtpos','$txtslary','$txtpro','$txtemail','$pass','$txtdp')";
      $insert_run=mysqli_query($connect,$insert);
        if ($insert_run)
        {
          echo "<script> alert ('Completely Added');window.location.assign('manager_list.php');</script>";
        }
        else
        {
          echo "<script> alert('Somthing went wrong'); </script>";
        }
      }
    }
    else
    {
      echo "<script> alert('Somthing went wrong'); </script>";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

      <form action='add_manager.php' method='POST' class="form-sample" enctype="multipart/form-data"> 

            <label class="col-sm-3 col-form-label">Name</label>
              <div class="form-floating mb-1">
                <input required type="text" name='name' placeholder="Name" class="form-control">
              </div>


            <label class="col-sm-3 col-form-label">Profile</label>
              <div class="form-floating mb-1">
                <input required type="file"/ name='img' placeholder="Image" class="form-control">
              </div>


              <label class="col-sm-3 col-form-label">PhoneNumber</label>
              <div class="form-floating mb-1">
                <input required type="text" name='phone' placeholder="Phone Number" class="form-control">
              </div>


              <label class="col-sm-3 col-form-label">Address</label>
              <div class="form-floating mb-1">
                <input required type="text" name='address' placeholder="Address" class="form-control">
              </div>


              <label class="col-sm-3 col-form-label">EDU Level</label>
              <div class="form-floating mb-1">
                <textarea required type="text" name='EDU' placeholder="Staff's EDU Level" cols="30" rows="7" class="form-control"></textarea>
              </div>


              <label class="col-sm-3 col-form-label">Position</label>
              <div class="form-floating mb-1">
                <input required type="text" name='position' placeholder="Position" class="form-control">
              </div>


              <label class="col-sm-3 col-form-label">Slary</label>
              <div class="form-floating mb-1">
                <input required type="text" name='slary' placeholder="Slary" class="form-control">
              </div>


              <label class="col-sm-3 col-form-label">Project Done</label>
              <div class="form-floating mb-1">
                <textarea required type="text" name='project' placeholder="Project Done" cols="30" rows="7" class="form-control"></textarea>
              </div>


              <label class="col-sm-3 col-form-label">Email</label>
              <div class="form-floating mb-1">
                <input required type="email" name="email" placeholder="Email" class="form-control">
              </div>


              <label class="col-sm-3 col-form-label">Password</label>
              <div class="form-floating mb-1">
                  <input required type="password" name="password" placeholder="Enter Password" class="form-control">
              </div>


              <label class="col-form-label">Select User Department</label>
              <div class="form-group">
                <select name="department" id="" onchange="">
                  <?php 
                    $select='SELECT * from departmenttable';
                    $ret=mysqli_query($connect,$select);
                    $count=mysqli_num_rows($ret);
                    for ($i=0; $i < $count; $i++) 
                    { 
                      $row=mysqli_fetch_array($ret);

                      $did=$row['departmentID'];
                      $dname=$row['departmentName'];

                      echo "<option value='$dname'>$dname</option>";
                    }
                  ?>
                </select>
              </div>

      <input name='btnsave' value='Save' type="submit" class="btn btn-success mr-2">
      <button class="btn btn-light"><a href='management_form.php?' class="text-dark">Cancel</a></button>
      </form>

</body>
</html>
<?php 
include('footer.php');
?>