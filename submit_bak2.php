<?php
	//mb_internal_encoding("UTF-8");
	$itemValue=$_POST["word"];
	$itemType=$_POST["wordType"];
	$itemDef=$_POST["wordDef"];
	// Create connection
	$con=mysqli_connect("mysql301.ixwebhosting.com","manlapi_eric","sTinky1987","manlapi_ericdev");

	// Check connection
	if (mysqli_connect_errno()) {
	  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	} else {
		echo "Connected!<br><br>";
	}

	$sql="INSERT INTO JP_dev (itemValue, itemType, itemDef)
	VALUES ('$itemValue', '$itemType', '$itemDef')";

	$result = mysqli_query($con,"SELECT * FROM JP_dev");

	if (!mysqli_query($con,$sql)) {
		die('Error: ' . mysqli_error($con));
	}

	mysqli_close($con);
?>
