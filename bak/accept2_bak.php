<?php
	function accept2() {
		$word1=$_POST["word1"];
		$kanjiArray=array();
		$fganaArray=array();
		for ($i=0;$i<10;$i++) {
			$thisKanji=$_POST["kanji".$i];
			$thisFgana=$_POST["fgana".$i];
			if (isset($thisKanji)) {
				array_push($kanjiArray,$thisKanji);
				array_push($fganaArray,$thisFgana);
			};
		};
	};

	accept2();
?>