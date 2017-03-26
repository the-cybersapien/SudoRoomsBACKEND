<?php
	error_reporting(0);
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"sudorooms");
	$sql = "select * from room";
	$result=mysqli_query($con,$sql);
	$rows=array();
	while($r = mysqli_fetch_assoc($result))
	{
		$rows[]=$r;
	}
	echo json_encode($rows);
	mysqli_close($con);
?>
