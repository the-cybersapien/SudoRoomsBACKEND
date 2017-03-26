<?php
	$con = mysqli_connect("localhost","cybersap_user","clashhacks2k17");
	mysqli_select_db($con,"cybersap_sudorooms");
	$sql = "select * from open_rooms";
	$result=mysqli_query($con,$sql);
	$rows=array();
	while($r = mysqli_fetch_assoc($result))
	{
		$rows[]=$r;
	}
	echo json_encode($rows);
	mysqli_close($con);
?>
