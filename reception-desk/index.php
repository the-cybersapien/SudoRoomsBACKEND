<!doctype html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>Reception Desk | SUDOROOMS</title>
  <link rel="stylesheet" type="text/css" media="all" href="css/styles.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/switchery.min.css">
  <script type="text/javascript" src="js/switchery.min.js"></script>
</head>

<body>
  <div id="wrapper">
  
  <h1>Reception Desk</h1><div class="col-submit">
    <a href="resetdata.php"><button class="submitbtn">Reset Data</button></a>
  </div>
  
  <form id="RegisterForm" action="registeruser.php" method="post">
  <div class="col-3">
    <label>
      Name
      <input placeholder="Customer's full name" id="name" name="name" tabindex="1">
    </label>
  </div>
  <!--<div class="col-2">
    <label>
      Company
      <input placeholder="Where do you currently work?" id="company" name="company" tabindex="2">
    </label>
  </div>-->
  
  <div class="col-3">
    <label>
      Mobile Number
      <input placeholder="Customer's contact number" id="phone" name="phone" tabindex="3">
    </label>
  </div>
  <div class="col-3">
    <label>
      CheckIn Date and time	
      <input value="<?php
      				error_reporting(0);
      				date_default_timezone_set('Asia/Kolkata');
				$TimeStamp = date("Y-m-d H:i:s");
				echo $TimeStamp;
				?>
			" id="checkin" name="checkin" tabindex="4" disabled>
    </label>
  </div>
  <div class="col-3">
    <label>
      Room Choice
      <select id="room" name="room" tabindex="5">
        <!--<option>5-15 hrs per week</option>
        <option>15-30 hrs per week</option>
        <option>30-40 hrs per week</option>-->
        <?php
        	$con = mysqli_connect("localhost","root","");
		mysqli_select_db($con,"sudorooms");
		$sql = "select RoomNum from room WHERE isFree='yes'";
		$result = mysqli_query($con,$sql);
		//$records = mysqli_num_rows($result);
		//$row = mysqli_fetch_array($result);
		while($row=mysqli_fetch_array($result))
		{
			echo "<option value=".$row['RoomNum'].">Room #{$row['RoomNum']}</option>";
		}
        ?>
      </select>
    </label>
  </div>
  
  <!--<div class="col-4">
    <label>
      Skills
      <input placeholder="List a few of your primary skills" id="skills" name="skills" tabindex="6">
    </label>
  </div>
  <div class="col-4">
    <label>
      Yrs Experience
      <input placeholder="How many years of experience?" id="experience" name="experience" tabindex="7">
    </label>
  </div>-->
  <!--<div class="col-4 switch">
    <label>E-mail Updates?</label>
    <center style="position:relative;margin-bottom:8px;"><input type="checkbox" class="js-switch"></center>
  </div>-->
  
  <div class="col-submit">
    <button class="submitbtn">GENERATE ACCESS KEY</button>
  </div>
  </form>
  </div>
<script type="text/javascript">
var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

elems.forEach(function(html) {
  var switchery = new Switchery(html);
});
</script>
</body>
</html>
