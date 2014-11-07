<?php 
	include 'sortprint.php';
	function fix($cb) {
		$con=mysqli_connect("mysql301.ixwebhosting.com","manlapi_eric","sTinky1987","manlapi_ericdev");
		$result = mysqli_query($con,"SELECT * FROM JPdev_Words ORDER BY wordIndex ASC");

		$thisKey=0;

		while($row = mysqli_fetch_array($result)) {
			$thisIndex = $row['wordIndex'];
			$sql = "UPDATE JPdev_Words SET fakeKey='$thisKey' WHERE wordIndex='$thisIndex'";
			mysqli_query($con,$sql);
			$thisKey++;
		};
		$cb("listItem");
	};

	fix("printData");

?>