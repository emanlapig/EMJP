<?php
	function accept1() {
		$word1=$_POST["word1"];
		//mb_internal_encoding('UTF-8');
		//$wordserial=mb_split('',$word1);

		$wordsplit=mb_str_split($word1);
		$len=count($wordsplit);

		for ($i=0;$i<$len;$i++) {
			echo $i."<input type=\"text\" name=\"kanji".$i."\" value=\"".$wordsplit[$i]."\">&nbsp;<input type=\"text\" name=\"fgana".$i."\"><br>";
		}

		//$con=mysqli_connect("mysql301.ixwebhosting.com","manlapi_eric","sTinky1987","manlapi_ericdev");

		//mysqli_close($con);
		//print_r( $wordsplit ); 
	}

	function mb_str_split($string) {
	    return preg_split('/(?<!^)(?!$)/u',$string);
	}

	accept1();

?>