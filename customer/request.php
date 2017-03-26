<?php

function send_open_signal($room)
{
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"sudorooms");
	$sql = "select * from room WHERE RoomNum = '".$room."'";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
	if($row['isOpen']=='yes')
	{
		header('HTTP/1.0 304 ALREADY OPEN');
	}
	else
	{
		$sql = "UPDATE room SET isOpen = 'yes' WHERE RoomNum = '".$room."'";
		$result = mysqli_query($con,$sql);
		$sql_confirm = "select * from room WHERE RoomNum = '".$room."'";
		$result_confirm = mysqli_query($con,$sql_confirm);
		$row = mysqli_fetch_array($result_confirm);
		if($row['isOpen']=='yes')
		{
			header('HTTP/1.0 200 OPENED');
		}
		else
		{
			header('HTTP/1.0 304 FAILED TO OPEN');
		}
	}
}

function send_close_signal($room)
{
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"sudorooms");
	$sql = "select * from room WHERE RoomNum = '".$room."'";
	$result = mysqli_query($con,$sql);
	$row = mysqli_fetch_array($result);
	if(!($row['isOpen']=='yes'))
	{
		header('HTTP/1.0 304 ALREADY CLOSED');
	}
	else
	{
		$sql = "UPDATE room SET isOpen = 'no' WHERE RoomNum = '".$room."'";
		$result = mysqli_query($con,$sql);
		$sql_confirm = "select * from room WHERE RoomNum = '".$room."'";
		$result_confirm = mysqli_query($con,$sql_confirm);
		$row = mysqli_fetch_array($result_confirm);
		if($row['isOpen']=='no')
		{
			header('HTTP/1.0 200 CLOSED');
		}
		else
		{
			header('HTTP/1.0 304 FAILED TO CLOSE');
		}
	}
}

function verify_access($access,$room) 
{
	send_open_signal($room);
}

/*************************************************************************************************************************/	
	
	error_reporting(0);
	$room_number = NULL;
	$action = NULL;
	$access = NULL;
	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET, POST');
	date_default_timezone_set('Asia/Kolkata');
	$TimeStamp = date("Y-m-d H:i:s");
	$room_number = $_GET["room"];
	$action = $_GET["action"];	// OPEN for opening the door and CLOSE for closing the door
	//$access = $_GET["access_key"];
	if(!($room_number==null || $action==null) && $action=="OPEN")
	{
		//echo $room_number," ",$action;
		//verify_access($access,$room_number);
		send_open_signal($room_number);
	}
	else if(!($room_number==null || $action==null) && $action=="CLOSE")
	{
		//echo $room_number," ",$action;
		//verify_access($access,$room_number);
		send_close_signal($room_number);
	}
	else
	{
		header('HTTP/1.0 400 Invalid call to API');
		//var_dump(http_response_code());
	}	
?>
