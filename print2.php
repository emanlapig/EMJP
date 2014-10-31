<?php
	function submit1($cb) {
		$word1=$_POST["word1"];
		//mb_internal_encoding('UTF-8');
		//$wordserial=mb_split('',$word1);

		$wordsplit=mb_str_split($word1);

		$con=mysqli_connect("mysql301.ixwebhosting.com","manlapi_eric","sTinky1987","manlapi_ericdev");

		$sql="INSERT INTO JP_dev2 (word1, word2) VALUES ('$wordsplit','')";

		mysqli_close($con);
		$cb($wordsplit,$word1);
		//print_r( $wordsplit ); 
	}

	function print1($wordsplit,$word1) {
		$con=mysqli_connect("mysql301.ixwebhosting.com","manlapi_eric","sTinky1987","manlapi_ericdev");
		
	}

	function mb_str_split( $string ) {
	    return preg_split('/(?<!^)(?!$)/u', $string );
	} 

	submit1("print1");

?>