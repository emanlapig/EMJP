<?php
	function printData() {
		$con=mysqli_connect("mysql301.ixwebhosting.com","manlapi_eric","sTinky1987","manlapi_ericdev");
		$result = mysqli_query($con,"SELECT * FROM JPdev_Words ORDER BY fakeKey DESC");

		while($row = mysqli_fetch_array($result)) {
			$kanjiArray=explode(",",$row['Kanji']);
			$fgArray=explode(",",$row['Furigana']);
			echo "<span class=\"listItem\" id=\"list".$row['fakeKey']."\" onclick=\"window.wordObj={num:'".$row['fakeKey']."',kanji:'".$row['Kanji']."',fg:'".$row['Furigana']."',type:'".$row['Type']."',def:'".$row['Definition']."'};viewWord(wordObj)\">";
			echo "<span class=\"listWord\">";

			$len=count($kanjiArray);

			if ($len<10) {
				$ksize="kanji3";
			} else {
				$ksize="kanji4";
			}
			for ($i=0;$i<$len;$i++) {
				echo "<span class=\"kfg2\"><center>";
				echo "<span class=\"fg2\">".$fgArray[$i]."</span>";
				echo "<span class=\"".$ksize."\">".$kanjiArray[$i]."</span></center></span>";
			}
			echo "</span>";
			echo "<span class=\"def1\">(".$row['Type'].") ".$row['Definition']."</span>";
			echo "</span>";
		}
		mysqli_close($con);
	}
?>