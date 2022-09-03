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
                  <H4> Department List </H4>
          </div>
              <div class="table-responsive">
                <table class="table table-sm table-dark" id="">
	                <thead>
                    <tr>
                      <th>Department Name</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>

                      <?php
                        $selects="Select * From departmenttable";
                        $rets=mysqli_query($connect,$selects);
                        $count=mysqli_num_rows($rets);

                        for ($i=0; $i < $count ; $i++) 
                        { 
                          $row=mysqli_fetch_array($rets);

                          $id=$row['departmentID'];
                          $txtname=$row['departmentName'];

                          echo "
                          <tr>
                            <td>$txtname</td>
                            <td>
                            <a href='department_delete.php?id=$id' class='btn btn-danger'>
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
<?php include('footer.php');

?>