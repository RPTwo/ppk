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
  $pass=mysqli_real_escape_string($connect,$_POST['password']);
  $dpname=mysqli_real_escape_string($connect,$_POST['department']);
  
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
      $checkemail = "SELECT * FROM stafftable WHERE staffEmail='$txtemail'";
      $checkemail_run=mysqli_query($connect,$checkemail);
      $count=mysqli_num_rows($checkemail_run);
      if ($count>0)
      {
        echo "<script> alert ('Email Already Exists');</script>";
      }
      else
      {
        $insert="INSERT INTO stafftable(staffName,staffProfile,staffPhone,staffAddress,staffEDU,staffPosition,staffSlary,staffProject,staffEmail,staffPassword,departmentName) 
        VALUES ('$txtname','$imgfile','$txtphone','$txtadd','$txtedu','$txtpos','$txtslary','$txtpro','$txtemail','$pass','$dpname')";
        $insert_run=mysqli_query($connect,$insert);
          if ($insert_run)
          {
            echo "<script> alert ('Completely Added');</script>";
          }
          else
          {
            echo "<script> alert ('Somthing Went Wrong');</script>";
        }
      }
    }
    
}

?>
<div class="app-container">
    <div class="app-content">
      <form action='add_staff.php' method='POST' class="form-sample" enctype="multipart/form-data"> 
      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Name</label>
              <div class="form-floating mb-1">
                <input required type="text" name='name' placeholder="Staff's Name" class="form-control">
              </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Profile</label>
              <div class="form-floating mb-1">
                <input required type="file"/ name='img' placeholder="Staff's Image" class="form-control">
              </div>
          </div>
        </div>
      </div><div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Phone Number</label>
              <div class="form-floating mb-1">
                <input required type="text" name='phone' placeholder="Staff's Phone Number" class="form-control">
              </div>
          </div>
        </div>
      </div><div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Address</label>
              <div class="form-floating mb-1">
                <input required type="text" name='address' placeholder="Staff's Address" class="form-control">
              </div>
          </div>
        </div>
      </div><div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">EDU Level</label>
              <div class="form-floating mb-1">
                <textarea required type="text" name='EDU' placeholder="Staff's EDU Level" cols="30" rows="7" class="form-control"></textarea>
              </div>
          </div>
        </div>
      </div><div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Position</label>
              <div class="form-floating mb-1">
                <input required type="text" name='position' placeholder="Position" class="form-control">
              </div>
          </div>
        </div>
      </div><div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Slary</label>
              <div class="form-floating mb-1">
                <input required type="text" name='slary' placeholder="Staff's Slary" class="form-control">
              </div>
          </div>
        </div>
      </div><div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Project Done</label>
              <div class="form-floating mb-1">
                <textarea required type="text" name='project' placeholder="Project Done" cols="30" rows="7" class="form-control"></textarea>
              </div>
          </div>
        </div>
      </div><div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Email</label>
              <div class="form-floating mb-1">
                <input required type="email" name="email" placeholder="Staff Email" class="form-control">
              </div>
          </div>
        </div>
      </div><div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Password</label>
              <div class="form-floating mb-1">
                  <input required type="password" name="password" placeholder="Enter Password" class="form-control">
              </div>
          </div>
        </div>
      </div>               
              
      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
              <label class="col-sm-3 col-form-label">Department</label>
              <div class="form-floating mb-1">
                <select name="department" id="">
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
            </div>
          </div>
      </div>
      <input name='btnsave' value='Save' type="submit" class="btn btn-success mr-2">
      <button><a class="btn btn-light" href="marketing_form.php">Cancel</button>
      </form>
    </div>
</div>
<?php 
include('footer.php');
?>