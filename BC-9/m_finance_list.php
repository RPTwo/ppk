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
                  <H4> Finance List </H4>
          </div>
              <div class="table-responsive">
                <table class="table table-sm table-dark" id="">
	                <thead>
                    <tr>
                      <th>Department Name</th>
                      <th>Manager Name</th>
                      <th>Finance Date</th>
                      <th>Finance Case</th>
                    </tr>
                  </thead>
                  <tbody>

                      <?php
                        $selects="SELECT * FROM financetable";
                        $rets=mysqli_query($connect,$selects);
                        $count=mysqli_num_rows($rets);

                        for ($i=0; $i < $count ; $i++) 
                        { 
                          $row=mysqli_fetch_array($rets);

                          $fid=$row['financeID'];
                          $txtdname=$row['departmentName'];
                          $txtmname=$row['managerName'];
                          $txtfdate=$row['financeDate'];
                          $txtfcase=$row['financeCase'];

                          echo "
                          <tr>
                            <td>$txtdname</td>
                            <td>$txtmname</td>
                            <td>$txtfdate</td>
                            <td>$txtfcase</td>
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