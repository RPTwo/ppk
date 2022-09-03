<?php
session_start();
include('header.php');


if (isset($_POST['btnsave']))
{
  $txtdname=mysqli_real_escape_string($connect,$_POST['dname']);

  if($txtdname != 0)
    {
      $checkdname = "SELECT * FROM departmenttable WHERE departmentName='$txtdname'";
      $checkdname_run=mysqli_query($connect,$checkdname);
      $count=mysqli_num_rows($checkdname_run);
      if ($count>0)
      {
        echo "<script> alert ('Department Is Already Exists');</script>";
      }
      else
      {
        $insert="INSERT INTO departmenttable(departmentName) VALUES ('$txtdname')";
      $insert_run=mysqli_query($connect,$insert);
        if ($insert_run)
        {
          echo "<script> alert ('Completely Added');window.location.assign('department_list.php');</script>";
        }
        else
        {
          echo "<script> alert('Somthing went wrong'); </script>";
        }
      }
    }
}

?>
<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
      <form action='add_department.php' method='POST' class="form-sample" enctype="multipart/form-data"> 

            <label class="form-sample">Department Name</label>
              <div class="form-floating mb-1">
                <input required type="text" name='dname' placeholder="Type Department Name" class="form-control">
              </div>
          

    <input name='btnsave' value='Save' type="submit" class="btn btn-success mr-2">
      <button class="btn btn-light"><a href='management_form.php?' class="text-dark">Cancel</a></button>
      </form>
</body>
<?php include('footer.php') ?>