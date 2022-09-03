<?php 
session_start();
include('header.php');

if (isset($_POST['btnsave']))
{
    $txtDname=$_POST['txtDname'];
    $txtSid=$_POST['txtSid'];
    $txtRPdate=$_POST['txtRPdate'];
    $txtRP=$_POST['txtRP'];

$insert="INSERT INTO staffreport (departmentName, staffID, reportDate, staffReport) 
VALUES ('$txtdname','$txtsid','$txtRPdate','$txtRP')";
    $ret=mysqli_query($connect,$insert);
    if ($ret)
    {
      echo "<script> alert('Save'); </script>";
    }
    else
    {
        echo "<script> alert('Somthing Went Wrong'); </script>";
    }
}
?>
<div class="row">
    <div class="col-md-6">
        <div class="form-group row">
            <label class="col-sm-3 col-form-label">Report</label>
            <div class="col-sm-9">
                <textarea placeholder="Report" type="text" id="" cols="30" rows="7" class="form-control" name='txtr' required></textarea>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group row">
            <tr>
                <td colspan='6' align='right'>
                Sale Date- <input type='text' value='<?php echo date('Y-m-d') ?>' name='txtRPdate' readonly>
                </td>
            </tr>
        </div>
    </div>
</div>

  <input Name='btnsave' value='Save' type="submit" class="btn btn-success mr-2">
  <button class="btn btn-light"><a href='staff_form.php?id=$id' class=''>
                            <i class=''></i>Cancel</a></button>

<?php 
include('footer.php');
?>
