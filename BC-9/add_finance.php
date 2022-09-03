<?php
session_start();
include('header.php');


if (isset($_POST['btnsave']))
{
  $txtdname=mysqli_real_escape_string($connect,$_POST['dname']);
  $txtmname=mysqli_real_escape_string($connect,$_POST['mname']);
  $txtfdate=mysqli_real_escape_string($connect,$_POST['fdate']);
  $txtfcase=mysqli_real_escape_string($connect,$_POST['fcase']);

      $insert="INSERT INTO financetable(departmentName,managerName,financeDate,financeCase) VALUES ('$txtdname','$txtmname','$txtfdate','$txtfcase')";
      $insert_run=mysqli_query($connect,$insert);
        if ($insert_run)
        {
          echo "<script> alert ('Completely Added');window.location.assign('finance_list.php');</script>";
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
      <form action='add_finance.php' method='POST' class="form-sample" enctype="multipart/form-data"> 
      <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Select User Department</label>
              <div class="col-sm-9">
                <select name="dname" id="" onchange="">
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

      <div class="row">
          <div class="col-md-6">
            <div class="form-group row">
              <label class="col-sm-3 col-form-label">Select Manager Name</label>
              <div class="col-sm-9">
                <select name="mname" id="" onchange="">
                  <?php 
                    $select='SELECT * from managertable';
                    $ret=mysqli_query($connect,$select);
                    $count=mysqli_num_rows($ret);
                    for ($i=0; $i < $count; $i++) 
                    { 
                      $row=mysqli_fetch_array($ret);

                      $mid=$row['managerID'];
                      $mname=$row['managerName'];

                      echo "<option value='$mname'>$mname</option>";
                    }
                  ?>
                </select>
              </div>
            </div>
          </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Finance Date</label>
              <div class="form-floating mb-1">
                <input required type="date" name='fdate' placeholder="" class="form-control">
              </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Finance Case</label>
              <div class="form-floating mb-1">
                 <textarea required type="text" name='fcase' placeholder="Finance Case" cols="30" rows="7" class="form-control"></textarea>
              </div>
          </div>
        </div>
      </div>


    <input name='btnsave' value='Save' type="submit" class="btn btn-success mr-2">
    <a href='finance_list.php?' class="text-dark">Cancel</a>
      </form>
    </body>
<?php 
include('footer.php');
?>