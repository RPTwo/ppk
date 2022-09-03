<?php
session_start();
include('header.php');


if (isset($_POST['btnsave']))
{
  $txtpname=mysqli_real_escape_string($connect,$_POST['pname']);
  $txtpdate=mysqli_real_escape_string($connect,$_POST['pdate']);
  $txtcname=mysqli_real_escape_string($connect,$_POST['cname']);
  $txtcphone=mysqli_real_escape_string($connect,$_POST['cphone']);
  $txtcemail=mysqli_real_escape_string($connect,$_POST['cemail']);

      $insert="INSERT INTO projecttable(projectName,projectDate,customerName,customerPhone,customerEmail) VALUES ('$txtpname','$txtpdate','$txtcname','$txtcphone','$txtcemail')";
      $insert_run=mysqli_query($connect,$insert);
        if ($insert_run)
        {
          echo "<script> alert ('Completely Added');window.location.assign('project_list.php');</script>";
        }
        else
        {
          echo "<script> alert('Somthing went wrong'); </script>";
        }
      }

?>

<div class="app-container">
    <div class="app-content">
      <form action='add_project.php' method='POST' class="form-sample" enctype="multipart/form-data"> 
      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Project Name</label>
              <div class="form-floating mb-1">
                <input required type="text" name='pname' placeholder="Type Project Name" class="form-control">
              </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Project Date</label>
              <div class="form-floating mb-1">
                <input required type="date" name='pdate' placeholder="" class="form-control">
              </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Customer Name</label>
              <div class="form-floating mb-1">
                <input required type="text" name='cname' placeholder="Type Customer Name" class="form-control">
              </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Customer Phone Number</label>
              <div class="form-floating mb-1">
                <input required type="text" name='cphone' placeholder="Type Customer Phone Number" class="form-control">
              </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="form-group row">
            <label class="col-sm-3 col-form-label">Customer Email</label>
              <div class="form-floating mb-1">
                <input required type="email" name='cemail' placeholder="Type Customer Email" class="form-control">
              </div>
          </div>
        </div>
      </div>

    <input name='btnsave' value='Save' type="submit" class="btn btn-success mr-2">
      <button class="btn btn-light"><a href='project_list.php?' class="text-dark">Cancel</a></button>
      </form>
    </div>
</div>