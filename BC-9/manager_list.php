<?php
session_start(); 
include('header.php');

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style_list.css">
</head>
<body>

          <div class="projects-section-header">
                  <H4> Manager List </H4>
          </div>
              <div class="table-responsive">
                <table class="table table-sm table-dark" id="">
	                <thead>
                    <tr>
                      <th>Name</th>
                      <th>Profile</th>
                      <th>Phone Number</th>
                      <th>Address</th>
                      <th>Email</th>
                      <th>Department</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>

                      <?php
                        $selects="Select * From managertable";
                        $rets=mysqli_query($connect,$selects);
                        $count=mysqli_num_rows($rets);

                        for ($i=0; $i < $count ; $i++) 
                        { 
                          $row=mysqli_fetch_array($rets);

                          $id=$row['managerID'];
                          $txtname=$row['managerName'];
                          $txtprofile=$row['managerProfile'];
                          $txtphone=$row['managerPhone'];
                          $txtadd=$row['managerAddress'];
                          $txtemail=$row['managerEmail'];
                          $txtdp=$row['departmentName'];

                          echo "
                          <tr>
                            <td>$txtname</td>
                            <td><img src='$txtprofile' width='150px' height='150px'></td>
                            <td>$txtphone</td>
                            <td>$txtadd</td>
                            <td>$txtemail</td>
                            <td>$txtdp</td>
                            <td>
                            <a href='manager_delete.php?id=$id' class='btn btn-danger'>
                            <i class=''></i>Delete</a>
                            </td>
                          </tr>";     
                        }
                      ?>
                  </tbody>
                </table>
              </div>
                <button class="btn btn-dark">
                  <a href='management_form.php?id=$id' class=''>
                    <i class=''></i>Cancel
                  </a>
                </button>
              </body>
              </html>
<?php 
  require 'footer.php';
?>