<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHPdev</title>
<script type="text/javascript" src="http://eric.manlapig.net/jquery.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Metrophobic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Noto-Sans-Japan' rel='stylesheet' type='text/css'>

<style type="text/css">
	@font-face {
		font-family: 'Noto-Sans-Japan';
		src: url("NotoSansJP-Regular.otf") format("opentype");
	}
	div {
		position:relative;
		display:block;
	}
	#container {
		width:800px;
		height:200px;
		margin-left:auto;
		margin-right:auto;
		margin-top:100px;
		background-color:#00ff00;
	}
	.head {
		height:50px;
		background-color:#000000;
		color:#ffffff;
		font-family:'Metrophobic';
		line-height:50px;
	}
	#head1 {
		width:100px;
	}

</style>

</head>
<body>
	<div id="container">
		<div class="head" id="head2"><center>Term</center></div>
	</div>
	<br><br>
	<form id="form1">
		Word: <input type="text" name="word1"><br>
		<input type="button" id="accept1" value="Accept Word"><br>
		<span id="wordDisplay"></span><br>
		<input type="button" id="accept2" value="Accept Furigana"><br><br>
		<select id="type" name="wordType">
			<option>n</option>
			<option>pn</option>
			<option>particle</option>
			<option>na-adj</option>
			<option>no-adj</option>
			<option>conj-adj</option>
			<option>verb-trns</option>
			<option>verb-intrns</option>
			<option>set phrase</option>
			<option>suffix</option>
			<option>counter</option>
		</select><br>
		<textarea rows="2" cols="40" name="wordDef"></textarea><br>
		<input type="button" id="submit" name="submit" value="Submit">
		<script type="text/javascript">
			window.form1 = $("#form1");
			$("#accept1").click(function(event) {
				$form=$("#form1");
				$.post("accept1.php",form1.serialize(),function(data){
					//$("#wordDisplay").text("");
			    	$("#wordDisplay").append(data);
				});
			});
			$("#accept2").click(function(event) {
				$form=$("#form1");
				$.post("accept2.php",form1.serialize(),function(data){
					//$("#wordDisplay").text("");
			    	$("#wordDisplay").append(data);
				});
			});

			$("#form1").submit(function (ev) {
		        return false;
		    });
		</script>
	</form>
</body>
</html>