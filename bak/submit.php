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
	}

	$sql="INSERT INTO JP_dev (itemValue, itemType, itemDef)
	VALUES ('$itemValue', '$itemType', '$itemDef')";

	if (!mysqli_query($con,$sql)) {
		die('Error: ' . mysqli_error($con));
	}

	mysqli_close($con);

	$con2=mysqli_connect("mysql301.ixwebhosting.com","manlapi_eric","sTinky1987","manlapi_ericdev");

	$result = mysqli_query($con2,"SELECT * FROM JP_dev");
	$thisIndex = 0;

	while($row = mysqli_fetch_array($result)) {
		mysqli_query($row,"UPDATE JP_dev SET itemIndex=$thisIndex");
		echo "<input type=\"checkbox\" name=\"itemSelect[]\" value=\"" . $row['itemIndex'] . "\">" . $row['itemIndex'] . ") " . $row['itemValue'] . " (" . $row['itemType'] . ") - " . $row['itemDef'];
	 	echo "<br>";
	 	$thisIndex+=1;
	}
	mysqli_close($con2);
?>