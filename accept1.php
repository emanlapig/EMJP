<?php
	function accept1() {
		$word1=$_POST["word1"];

		$wordsplit=mb_str_split($word1);
		$len=count($wordsplit);

		for ($i=0;$i<$len;$i++) {
			echo "<div class=\"fginput\" id=\"fginput".$i."\">";
			echo "<input type=\"text\" class=\"input2\" id=\"fgana".$i."\" name=\"fgana".$i."\">";
			echo "<input type=\"text\" class=\"input3\" id=\"kanji".$i."\" name=\"kanji".$i."\" value=\"".$wordsplit[$i]."\" ><br>";
			echo "<span class=\"kanji1\">".$wordsplit[$i]."</span>";
			echo "</div>";
		}
	}

	function mb_str_split($string) {
	    return preg_split('/(?<!^)(?!$)/u',$string);
	}

	accept1();

?>