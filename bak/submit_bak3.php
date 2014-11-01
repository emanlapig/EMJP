<?php
	include 'sortprint.php';
	function formSubmit($cb1,$cb2) {
		//mb_internal_encoding("UTF-8");
		$itemValue1=$_POST["word"];
		$itemValue2=$_POST["word2"];
		$itemType=$_POST["wordType"];
		$itemDef=$_POST["wordDef"];
		$con=mysqli_connect("mysql301.ixwebhosting.com","manlapi_eric","sTinky1987","manlapi_ericdev");

		// Check connection
		if (mysqli_connect_errno()) {
		  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		$table1=mysqli_query($con,"SELECT * FROM JP_dev");
		$sum = mysql_num_rows($table1);

		$sql="INSERT INTO JP_dev (itemValue, itemValue2, itemType, itemDef)
		VALUES ('$itemValue1', '$itemValue2', '$itemType', '$itemDef')";

		if (!mysqli_query($con,$sql)) {
			die('Error (doIt): ' . mysqli_error($con));
		}

		//$cb1($cb2,$con);
		mysqli_close($con);
		$cb1($cb2);
	}

	formSubmit("sortPrint","printData");

	/*function reorder($cb2,$con) {
		$result = mysqli_query($con,"SELECT * FROM JP_dev ORDER BY itemIndex DESC");
		$thisIndex = 0;

		if($result!=null) {
			while($row = mysqli_fetch_array($result)) {
				$thisVal=$row['itemIndex'];
				$thisIndex+=1;
				$sql2="UPDATE JP_dev SET fakeKey='$thisIndex' WHERE itemIndex='$thisVal'";
				mysqli_query($con,$sql2) or die('Error (reorder): ' . mysqli_error($con));
			}
		} else {
			echo "none";
		}

		/*if (!mysqli_query($con,$sql2)) {
			die('Error (reorder): ' . mysqli_error($con));
		}

		$cb2($con);
	}

	function printData($con) {
		$result = mysqli_query($con,"SELECT * FROM JP_dev ORDER BY itemIndex DESC");

		while($row = mysqli_fetch_array($result)) {
			echo "<input type=\"checkbox\" name=\"itemSelect[]\" value=\"" . $row['itemIndex'] . "\">" . $row['itemIndex'] . "/" . $row['fakeKey'] . ") " . $row['itemValue'] . " (" . $row['itemType'] . ") - " . $row['itemDef'];
		 	echo "<br>";
		}

		mysqli_close($con);
	}

	doIt('reorder','printData');*/
?>