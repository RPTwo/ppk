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
                  <H4>Support Staff List </H4>
              </div>

              <div class="table-responsive">
                <table class="table table-sm table-dark" id="">
                      <thead>
                          <tr>
                              <th> Name </th>
                              <th> Profile </th>
                              <th> Email </th>
                              <th> Phone Number </th>
                              <th> Address </th>
                              <th> EDU Level </th>
                              <th> Position </th>
                              <th> Slary </th>
                              <th> Project Done </th>
                          </tr>
                      </thead>
                      <tbody>

                      <?php
                        $selects="SELECT * FROM stafftable WHERE departmentName='Support'";
                        $rets=mysqli_query($connect,$selects);
                        $count=mysqli_num_rows($rets);

                        for ($i=0; $i < $count ; $i++) 
                        { 
                          $row=mysqli_fetch_array($rets);

                          $id=$row['staffID'];
                          $txtname=$row['staffName'];
                          $txtprofile=$row['staffProfile'];
                          $txtemail=$row['staffEmail'];
                          $txtphone=$row['staffPhone'];
                          $txtadd=$row['staffAddress'];
            						  $txtedu=$row['staffEDU'];
            						  $txtpos=$row['staffPosition'];
            						  $txtslary=$row['staffSlary'];
            						  $txtpro=$row['staffProject'];
                          $txtemail=$row['staffEmail'];

                          echo "
                          <tr>
                            <td>$txtname</td>
                            <td><img src='$txtprofile' width='150px' height='150px'></td>
                            </td>
                            <td>$txtemail</td>
                            <td>$txtphone</td>
                            <td>$txtadd</td>
                            <td>$txtedu</td>
                            <td>$txtpos</td>
                            <td>$txtslary</td>
                            <td>$txtpro</td>
                          </tr>";     
                        }

                      ?>
                      </tbody>
                    </table>
                    <button  class="btn btn-dark">
                  <a href='staff_list.php?id=$id' class=''>
                    <i class=''></i>Cancel
                  </a>
                </button>
                </div>
              </body>
              </html>
<?php 
  require 'footer.php';
?>