<?php
	$key=$_GET['key'];
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"sudorooms");
	$sql = "select * from customer where AccessKey='".$key."'";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
	$records = mysqli_num_rows($result);
	if($records==0)
	{
		//header("HTTP/1.0 404 Access Key not found");
		echo ("{\"Room\": N.A.,\"Name\": N.A.}");
	}
	else
	{
		echo ("{\"Room\": '".$row['RoomAllotted']."',\"Name\": '".$row['Name']."'}");
	}
	
?>
