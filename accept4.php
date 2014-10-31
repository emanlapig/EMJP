<?php
	include 'sortprint.php';
	function accept4($cb,$cb2,$cb3) {
		$kanji=",";
		$fgana=",";
		$wordType=$_POST["wordType"];
		$wordDef=$_POST["wordDef"];
		$wordIndex=$_POST["wordIndex"];
		for ($i=0;$i<20;$i++) {
			$thisKanji=$_POST["kanji".$i];
			$thisFgana=$_POST["fgana".$i];
			if (isset($thisKanji)) {
				$kanji.=$thisKanji.",";
				$fgana.=$thisFgana.",";
			};
		};
		$cb($kanji,$fgana,$wordType,$wordDef,$wordIndex,$cb2,$cb3);
	}

	function submitData($kanji,$fgana,$wordType,$wordDef,$wordIndex,$cb2,$cb3) {
		$con=mysqli_connect("mysql301.ixwebhosting.com","manlapi_eric","sTinky1987","manlapi_ericdev");

		// Check connection
		if (mysqli_connect_errno()) {
		  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
		};
		$sql=mysqli_query($con,"UPDATE JP_dev SET itemValue='$kanji', itemValue2='$fgana', itemType='$wordType', itemDef='$wordDef' WHERE itemIndex='$wordIndex'");

		mysqli_close($con);

		$cb2($cb3);
	};

	accept4("submitData","sortPrint","printData");
?>