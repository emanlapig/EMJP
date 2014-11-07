<?php
	function accept2($cb) {
		$word1=$_POST["word1"];
		$kanjiArray=array();
		$fganaArray=array();
		for ($i=0;$i<20;$i++) {
			$thisKanji=$_POST["kanji".$i];
			$thisFgana=$_POST["fgana".$i];
			if (isset($thisKanji)) {
				array_push($kanjiArray,$thisKanji);
				array_push($fganaArray,$thisFgana);
			};
		};
		$cb($kanjiArray,$fganaArray);
	};

	function printData($kA,$fA) {
		$len=count($kA);
		if ($len<8) {
			$ksize="kanji2";
		} else {
			$ksize="kanji3";
		};
		for ($j=0;$j<$len;$j++) {
			echo "<div class=\"kfg1\"><center>";
			echo "<span class=\"fg1\">".$fA[$j]."</span><br>";
			echo "<span class=\"".$ksize."\">".$kA[$j]."</span>";
			echo "</center></div>";
		};
	};

	accept2("printData");
?>