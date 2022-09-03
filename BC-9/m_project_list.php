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
                  <H4> Project List </H4>
              </div>

              <div class="table-responsive">
                <table class="table table-sm table-dark" id="">
                      <thead>
                          <tr>
                              <th> Project Name </th>
                              <th> Project Date </th>
                              <th> Customer Name </th>
                              <th> Customer Phone Number </th>
                              <th> Customer Email </th>
                          </tr>
                      </thead>
                      <tbody>

                      <?php
                        $selects="SELECT * FROM projecttable";
                        $rets=mysqli_query($connect,$selects);
                        $count=mysqli_num_rows($rets);

                        for ($i=0; $i < $count ; $i++) 
                        { 
                          $row=mysqli_fetch_array($rets);

                          $id=$row['projectID'];
                          $txtpname=$row['projectName'];
                          $txtpdate=$row['projectDate'];
                          $txtcname=$row['customerName'];
                          $txtcphone=$row['customerPhone'];
                          $txtcemail=$row['customerEmail'];

                          echo "
                          <tr>
                            <td>$txtpname</td>
                            <td>$txtpdate</td>
                            <td>$txtcname</td>
                            <td>$txtcphone</td>
                            <td>$txtcemail</td>
                          </tr>";     
                        }

                      ?>
                      </tbody>
                    </table>
                    <button class="btn btn-dark">
                  <a href='management_form.php?id=$id' class=''>
                    <i class=''></i>Cancel
                  </a>
                </button>
                </div>
              </body>
              </html>
<?php 
  require 'footer.php';
?>