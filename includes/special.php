<?php
	function special() {
		$word1=$_POST["word1"];
		echo "<div class=\"fginput\" id=\"fginput0\">";
		echo "<input type=\"text\" class=\"input2\" id=\"fgana0\" name=\"fgana0\">";
		echo "<input type=\"text\" class=\"input3\" id=\"kanji0\" name=\"kanji0\" value=\"".$word1."\" ><br>";
		echo "<span class=\"kanji2\">".$word1."</span>";
		echo "</div>";
	};
	special();
?>