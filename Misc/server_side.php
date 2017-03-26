<?php
	$client = $_GET["cId"];
	$allow = $_GET["allow"];
	$client_final = str_replace('"', '', $client);
	$con = mysqli_connect("localhost","cybersap_user","clashhacks2k17");
	mysqli_select_db($con,"cybersap_sudorooms");
	$sql = "insert into open_rooms(cId,allow) values('".$client_final."','".$allow."')";
	mysqli_query($con,$sql);
?>

