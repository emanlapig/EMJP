<?php
	include 'sortprint.php';
	function accept4($cb,$cb2) {
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
		$cb($kanji,$fgana,$wordType,$wordDef,$wordIndex,$cb2);
	}

	function submitData($kanji,$fgana,$wordType,$wordDef,$wordIndex,$cb2) {
		$con=mysqli_connect("mysql301.ixwebhosting.com","manlapi_eric","sTinky1987","manlapi_ericdev");

		// Check connection
		if (mysqli_connect_errno()) {
		  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
		};
		$sql=mysqli_query($con,"UPDATE JPdev_Words SET Kanji='$kanji', Furigana='$fgana', Type='$wordType', Definition='$wordDef' WHERE Index='$wordIndex'");

		mysqli_close($con);

		$cb2();
	};

	accept4("submitData","printData");
?>