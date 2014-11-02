<?php 
	include 'sortprint.php';
	function deleteItem($cb1,$cb2) {
		$word1=$_POST["word1"];
		$con=mysqli_connect("mysql301.ixwebhosting.com","manlapi_eric","sTinky1987","manlapi_ericdev");
		$sql=mysqli_query($con,"DELETE FROM JP_dev WHERE itemIndex='$word1'");
		mysqli_close($con);
		$cb1($cb2);
	};

	deleteItem("sortPrint","printData");
?>