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

          $post_data = array(
            'From' => '09243422233',
            'To' => $mobile,
            'Body' => 'Hello, your access key is: ' . $access_key);

          $exotel_sid = "cybersapien";
          $exotel_token = "0b83f4803c68e21290f19eb534d9b427937db916";

          $url = $url = "https://".$exotel_sid.":".$exotel_token."@twilix.exotel.in/v1/Accounts/".$exotel_sid."/Sms/send";

          $ch = curl_init();
          curl_setopt($ch, CURLOPT_VERBOSE, 1);

          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_POST, 1);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($ch, CURLOPT_FAILONERROR, 0);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
          curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));

          $http_result = curl_exec($ch);
          $error = curl_error($ch);
          $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

          curl_close($ch);
          echo "Response = ".print_r($http_result);

					header("Location: /sudorooms/reception-desk/");
					die();
?>
