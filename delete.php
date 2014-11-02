<?php 
	include 'sortprint.php';
	function deleteItem($cb) {
		$ind=$_POST["wordIndex"];
		$con=mysqli_connect("mysql301.ixwebhosting.com","manlapi_eric","sTinky1987","manlapi_ericdev");
		$sql=mysqli_query($con,"DELETE FROM JPdev_Words WHERE fakeKey='$ind'");
		$result=mysqli_query($con,"SELECT * FROM JPdev_Words");
		if ($result!=null) {
			while($row = mysqli_fetch_array($result)) {
				$thisInd=$row['fakeKey'];
				if ($thisInd>$ind) {
					$newInd=$thisInd-1;
					$sql2="UPDATE JP_dev SET fakeKey='$newInd' WHERE fakeKey='$thisInd'";
					mysqli_query($con,$sql2) or die('Error (reorder): ' . mysqli_error($con));
				}
			}
		}
		mysqli_close($con);
		$cb();
	};

	deleteItem("printData");
?>