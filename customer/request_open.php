<?php
	error_reporting(0);
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET, POST');
	$room_number = $_GET["room"];
	$action = $_GET["action"];	// OPEN for opening the door and CLOSE for closing the door
	if(!($room_number==null || $action==null))
		echo $room_number," ",$action;
	else
	{
		header('HTTP/1.0 200 OK');
		var_dump(http_response_code());
	}
	
?>
