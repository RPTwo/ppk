<?php
session_start();
include('header.php');
?>
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
                              <th>Delete</th>
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
                            <td>
                            <a href='project_delete.php?id=$id' class='btn btn-danger'>
                            <i class=''></i>Delete</a>
                            </td>
                          </tr>";     
                        }

                      ?>
                      </tbody>
                    </table>
                    <button class="btn btn-dark">
                  <a href='marketing_form.php?id=$id' class=''>
                    <i class=''></i>Cancel
                  </a>
                </button>
                </div>
<?php 
  require 'footer.php';
?>