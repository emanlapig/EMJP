<html>
<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<meta content="utf-8" http-equiv="encoding">
</head>
<body>
	<form>
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

			echo "<input type=\"checkbox\" name=\"itemSelect\" value=\"1\">1) $itemValue ($itemType) - $itemDef<br>";
			$thisIndex=1;

			while($row = mysqli_fetch_array($result)) {
				$thisIndex+=1;
				echo "<input type=\"checkbox\" name=\"itemSelect\" value=\"1\">$thisIndex) " . $row['itemValue'] . " (" . $row['itemType'] . ") - " . $row['itemDef'];
			 	echo "<br>";
			}

			if (!mysqli_query($con,$sql)) {
				die('Error: ' . mysqli_error($con));
			}

			mysqli_close($con);
		?>
	</form>

</body>
</html>
