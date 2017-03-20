<?php

	session_start();
	

	$id=$_GET["id"];
	require_once("var.php");
		$conn=mysqli_connect(host,un,pass,db) or die("error in connection".mysqli_connect_error());
		$q="delete from addtocart where cartid='$id'";
		$result=mysqli_query($conn,$q) or die("error in query".mysqli_error($conn));
		$count=mysqli_affected_rows($conn);
		mysqli_close($conn);
		
		if($count==1)
	{
		header("location:showcart.php");
	}
	else
	{
		$msg="Problem while deleting, please try again";
	}
?>