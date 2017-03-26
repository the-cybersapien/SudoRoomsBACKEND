<?php

					$con = mysqli_connect("localhost","root","");
					mysqli_select_db($con,"sudorooms");
					$sql = "UPDATE room SET isFree = 'yes' and isOpen='no' and staffaccess='yes' WHERE RoomNum IN (select RoomAllotted from customer)";
					mysqli_query($con,$sql);
					$sql = "truncate customer";
					mysqli_query($con,$sql);
					mysqli_close($con);
					header("Location: /sudorooms/");
					die();
?>
