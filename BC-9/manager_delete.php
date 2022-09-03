<?php

include('connect.php');

if (isset($_GET['id'])) 
{
	$id=$_GET['id'];
	$select="delete from managertable where managerID=$id";
	$ret=mysqli_query($connect,$select);

	if ($ret)
	{
		echo "<script> alert('Delete'); 
		window.location.assign('manager_list.php');</script>";
	}
	else
	{
		echo mysqli_error($connect);
	}

}

?>