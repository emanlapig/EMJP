<?php
	include 'sortprint.php';
	function reorder($cb) {
		$reorderStr = $_POST["reorderStr"];
		$reorderArray=explode(",",$reorderStr);

		$con=mysqli_connect("mysql301.ixwebhosting.com","manlapi_eric","sTinky1987","manlapi_ericdev");
		$result = mysqli_query($con,"SELECT * FROM JPdev_Words ORDER BY fakeKey DESC");

		while($row = mysqli_fetch_array($result)) {
			$thisIndex = $row['wordIndex'];
			$newIndex = array_search($row['fakeKey'], $reorderArray);
			//print_r($reorderArray[$num].",");
			$sql = "UPDATE JPdev_Words SET fakeKey='$newIndex' WHERE wordIndex='$thisIndex'";
			mysqli_query($con,$sql);
		}

		mysqli_close($con);
		$cb("listItemClone");
		//echo "<a id='break'></a>";
		//$cb("listItemClone");
	};
	reorder("printData");
?>