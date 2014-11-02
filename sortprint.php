<?php
	function sortPrint($cb) {
		$con=mysqli_connect("mysql301.ixwebhosting.com","manlapi_eric","sTinky1987","manlapi_ericdev");

		/*$result = mysqli_query($con,"SELECT * FROM JP_dev ORDER BY itemIndex ASC");
		$thisIndex = 0;

		if ($result!=null) {
			while($row = mysqli_fetch_array($result)) {
				$thisVal=$row['itemIndex'];
				$thisIndex+=1;
				$sql="UPDATE JP_dev SET fakeKey='$thisIndex' WHERE itemIndex='$thisVal'";
				mysqli_query($con,$sql) or die('Error (reorder): ' . mysqli_error($con));
			}
		} else {
			echo "none";
		}*/
		
		$cb($con);
	}

	function printData($con) {
		$result = mysqli_query($con,"SELECT * FROM JPdev_Words ORDER BY fakeKey DESC");

		while($row = mysqli_fetch_array($result)) {
			$kanjiArray=explode(",",$row['Kanji']);
			$fgArray=explode(",",$row['Furigana']);
			echo "<span class=\"listItem\" id=\"list".$row['fakeKey']."\" onclick=\"viewWord(".$row['fakeKey'].")\">";
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