<?php

include('connect.php');

if (isset($_GET['id'])) 
{
	$id=$_GET['id'];
	$select="delete from departmenttable where departmentID=$id";
	$ret=mysqli_query($connect,$select);

	if ($ret)
	{
		echo "<script> alert('Delete'); 
		window.location.assign('department_list.php');</script>";
	}
	else
	{
		echo mysqli_error($connect);
	}

}

?>