<?php 
session_start();
include('header.php');

 ?>
 <!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form>
          <div class="projects-section-header">
                  <label> Staff List </label>
              </div>

          <li class="form-control">
           <a class="form-control" href="m_marketing_staff_list.php">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Marketing Department</span>
            </a>
          </li>

          <li class="form-control">
           <a class="form-control" href="m_technical_staff_list.php">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Technical Department</span>
            </a>
          </li>

          <li class="form-control">
           <a class="form-control" href="m_finance_staff_list.php">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Finance Department</span>
            </a>
          </li>

          <li class="form-control">
           <a class="form-control" href="m_support_staff_list.php">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Support Department</span>
            </a>
          </li>
 <br>
          <button class="btn btn-light"><a href='management_form.php?' class="text-dark">Cancel</a></button>

              </form>
            </body>

<?php 
include('footer.php');
 ?>