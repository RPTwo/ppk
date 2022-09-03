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
          <label class="form-sample">Management Manager</label>
          <li class="form-control">
           <a class="form-control" href="add_manager.php">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Add Manager</span>
            </a>
          </li>
<br>
           <li class="form-control">
            <a class="form-control" href="manager_list.php">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Manager List</span>
            </a>
          </li>
<br>
          <li class="form-control">
            <a class="form-control" href="department_list.php">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Department List</span>
            </a>
          </li>
<br>
          <li class="form-control">
            <a class="form-control" href="staff_list.php">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Staff List</span>
            </a>
          </li>
<br>
          <li class="form-control">
            <a class="form-control" href="m_project_list.php">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Project List</span>
            </a>
          </li>
<br>
          <li class="form-control">
           <a class="form-control" href="m_finance_list.php">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Finance List</span>
            </a>
          </li>
<br>
          <li class="form-control">
            <a class="form-control" href="add_department.php">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Add Department</span>
            </a>
          </li>       
</form>
    </body>

<?php 
include('footer.php');
 ?>