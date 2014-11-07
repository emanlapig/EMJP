<?php
	function ddPrint($items,$activeDD) {
		echo "<div class=\"dd1\" id=\"".$activeDD."\" onclick=\"ddOpen('".$activeDD."')\">";
		echo "<div class=\"ddSpace\">(select type)</div>";
		echo "<div class=\"ddCtnr\">";
		echo "<div class=\"ddSelect\" id=\"".$activeDD."Select\">(select type)</div><br>";
		$len=count($items);
		//print_r($items);
		for ($i=0;$i<$len;$i++) {
			echo "<div class=\"ddItem\" onclick=\"ddSelect(event,'".$items[$i]."','".$activeDD."')\">".$items[$i]."</div><br>";
		};
		echo "</div></div>";
	};
?>