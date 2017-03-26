<?php
function generateAccessKey($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

  					$TimeStamp = date("Y-m-d H:i:s");
					$name=$_POST['name'];
					$mobile=$_POST['phone'];
					$roomchoice=$_POST['room'];
					$con = mysqli_connect("localhost","root","");
					mysqli_select_db($con,"sudorooms");
					$sql = "insert into customer(Name,CheckIn,RoomAllotted,Mobile) values('".$name."','".$TimeStamp."','".$roomchoice."','".$mobile."')";
					mysqli_query($con,$sql);
					$sql = "UPDATE room SET isFree = 'no' WHERE RoomNum = '".$roomchoice."'";
					mysqli_query($con,$sql);
					$access_key=generateAccessKey(6);
					$sql = "UPDATE customer SET AccessKey = '".$access_key."' WHERE RoomAllotted = '".$roomchoice."'";
					mysqli_query($con,$sql);
					mysqli_close($con);
					header("Location: /sudorooms/reception-desk/");
					die();
?>
