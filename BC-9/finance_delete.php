<?php

include('connect.php');

if (isset($_GET['id'])) 
{
	$id=$_GET['id'];
	$select="delete from financetable where financeID=$id";
	$ret=mysqli_query($connect,$select);

	if ($ret)
	{
		echo "<script> alert('Delete'); 
		window.location.assign('finance_list.php');</script>";
	}
	else
	{
		echo mysqli_error($connect);
	}

}

?>