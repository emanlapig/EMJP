<?php
	include 'sortprint.php';

	function deleteItem($cb1,$cb2) {
		$itemSelect=$_POST["itemSelect"];
		$L=count($itemSelect);
		$con=mysqli_connect("mysql301.ixwebhosting.com","manlapi_eric","sTinky1987","manlapi_ericdev");

		for ($i=0;$i<$L;$i++) {
			mysqli_query($con,"DELETE FROM JP_dev WHERE itemIndex='$itemSelect[$i]'");
		}

		mysqli_close($con);
		$cb1($cb2);
	}

	deleteItem("sortPrint","printData");

	/*function reorder($cb2) {
		$con=mysqli_connect("mysql301.ixwebhosting.com","manlapi_eric","sTinky1987","manlapi_ericdev");

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

		mysqli_close($con);
		sortPrint("printData");
	}

	function printData() {
		$con=mysqli_connect("mysql301.ixwebhosting.com","manlapi_eric","sTinky1987","manlapi_ericdev");
		$result = mysqli_query($con,"SELECT * FROM JP_dev ORDER BY itemIndex DESC");

		while($row = mysqli_fetch_array($result)) {
			echo "<input type=\"checkbox\" name=\"itemSelect[]\" value=\"" . $row['itemIndex'] . "\">" . $row['itemIndex'] . "/" . $row['fakeKey'] . ") " . $row['itemValue'] . " (" . $row['itemType'] . ") - " . $row['itemDef'];
		 	echo "<br>";
		}

		mysqli_close($con);
	}*/
?>