<?php
	function sortPrint($cb) {
		$con=mysqli_connect("mysql301.ixwebhosting.com","manlapi_eric","sTinky1987","manlapi_ericdev");

		$result = mysqli_query($con,"SELECT * FROM JP_dev ORDER BY itemIndex DESC");
		$thisIndex = 0;

		if ($result!=null) {
			while($row = mysqli_fetch_array($result)) {
				$thisVal=$row['itemIndex'];
				$thisIndex+=1;
				$sql="UPDATE JP_dev SET fakeKey='$thisIndex' WHERE itemIndex='$thisVal'";
				mysqli_query($con,$sql) or die('Error (reorder): ' . mysqli_error($con));
			}
		} else {
			echo "none";
		}
		
		$cb($con);
	}

	function printData($con) {
		$result = mysqli_query($con,"SELECT * FROM JP_dev ORDER BY itemIndex DESC");

		echo "<table id=\"table2\" border=\"0\" cellpadding=\"1\">";
		echo "<tr>";

		while($row = mysqli_fetch_array($result)) {
			echo "<td class=\"tr0\" style=\"width:30px\"><span style=\"padding-left:5px!important\"><input type=\"checkbox\" name=\"itemSelect[]\" value=\"".$row['itemIndex']."\"></span></td>";
			echo "<td class=\"tr0\" style=\"width:30px\"><center><span style=\"padding-left:0px!important\">".$row['fakeKey']."</span></center></td>";
			echo "<td class=\"tr0\" style=\"width:150px\"><span style=\"font-family:'Noto-Sans-Japan';font-size:20px\">".$row['itemValue']."</span></td>";
			echo "<td class=\"tr0\" style=\"width:150px\"><span style=\"font-family:'Noto-Sans-Japan'\">".$row['itemValue2']."</span></td>";
			echo "<td class=\"tr0\" style=\"width:400px\"><span>(".$row['itemType'].") ".$row['itemDef']."</span></td>";
			echo "</tr>";
			echo "<tr>";
		}

		echo "</tr></table>";
		mysqli_close($con);
	}
?>