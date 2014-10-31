<?php
	function viewWord() {
		$ind=$_POST["wordIndex"];
		$con=mysqli_connect("mysql301.ixwebhosting.com","manlapi_eric","sTinky1987","manlapi_ericdev");
		$result=mysqli_query($con,"SELECT * FROM JP_dev WHERE fakeKey='$ind'");
		$row=mysqli_fetch_array($result);

		$kanjiArray=explode(",",$row['itemValue']);
		$fgArray=explode(",",$row['itemValue2']);
		$len=count($kanjiArray);

		if ($len<8) {
			$ksize="kanji5";
		} else {
			$ksize="kanji2";
		};

		for ($i=0;$i<$len;$i++) {
			echo "<span class=\"kfg3\"><center>";
			echo "<span class=\"fg3\">".$fgArray[$i]."</span>";
			echo "<span class=\"".$ksize."\">".$kanjiArray[$i]."</span></center></span>";
		};

		echo "<br><br><span class=\"def2\"><center>(".$row['itemType'].") ".$row['itemDef']."</center></span><br><br>";

		mysqli_close($con);
	};

	viewWord();
?>