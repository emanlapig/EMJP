<?php
	function edit1() {
		$ind=$_POST["wordIndex"];
		$con=mysqli_connect("mysql301.ixwebhosting.com","manlapi_eric","sTinky1987","manlapi_ericdev");
		$result=mysqli_query($con,"SELECT * FROM JP_dev WHERE itemIndex='$ind'");
		$row=mysqli_fetch_array($result);
		$kanjiArray=explode(",",$row['itemValue']);
		$len=count($kanjiArray);
		$word="";
		for ($i=0;$i<$len;$i++) {
			$word.=$kanjiArray[$i];
		};

		echo "<input type=\"text\" class=\"input1\" onfocus=\"this.style.webkitTransform = 'translate3d(0px,-10000px,0)'; webkitRequestAnimationFrame(function() { this.style.webkitTransform = ''; }.bind(this))\" id=\"word1\" name=\"word1\" value=\"".$word."\"><br>";

		mysqli_close($con);
	};

	edit1();
?>