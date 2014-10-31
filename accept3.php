<?php
	include 'sortprint.php';
	function accept3($cb,$cb2,$cb3) {
		$kanji=",";
		$fgana=",";
		$wordType=$_POST["wordType"];
		$wordDef=$_POST["wordDef"];
		for ($i=0;$i<20;$i++) {
			$thisKanji=$_POST["kanji".$i];
			$thisFgana=$_POST["fgana".$i];
			if (isset($thisKanji)) {
				$kanji.=$thisKanji.",";
				$fgana.=$thisFgana.",";
			};
		};
		$cb($kanji,$fgana,$wordType,$wordDef,$cb2,$cb3);
	}

	function submitData($kanji,$fgana,$wordType,$wordDef,$cb2,$cb3) {
		$con=mysqli_connect("mysql301.ixwebhosting.com","manlapi_eric","sTinky1987","manlapi_ericdev");

		// Check connection
		if (mysqli_connect_errno()) {
		  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
		};

		$result=mysqli_query($con,"SELECT * FROM JP_dev");
		$maxIndex=0;

		if ($result!=null) {
			while($row = mysqli_fetch_array($result)) {
				$thisIndex=$row['fakeKey'];
				if ($thisIndex>$maxIndex) {
					$maxIndex=$thisIndex;
				}
			}
			$maxIndex+=1;
		}

		$sql=mysqli_query($con,"INSERT INTO JP_dev (fakeKey, itemValue, itemValue2, itemType, itemDef) VALUES ('$maxIndex', '$kanji', '$fgana', '$wordType', '$wordDef')");

		mysqli_close($con);

		$cb2($cb3);
	};

	accept3("submitData","sortPrint","printData");
?>