<?php
	error_reporting(0);
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"sudorooms");
	$sql = "select RoomNum,isFree,servicereq,isOpen from room";
	mysqli_query($con,$sql);
