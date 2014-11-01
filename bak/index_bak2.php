<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHPdev</title>
<script type="text/javascript" src="http://eric.manlapig.net/jquery.min.js"></script>
</head>
<body>
	<form id="form1" action="submit.php" method="post">
		Word: <input type="text" name="word"><br>
		Type: <input type="text" name="wordType"><br>
		Definition: <textarea rows="5" cols="50" name="wordDef"></textarea>
		<input type="submit" value="Submit">
	</form><br><br>
	<span id="dataDisplay"></span>
	<form id="form2" action="delete.php" method="post">
		<input type="submit" value="Delete">
	</form>
	<script type="text/javascript">
		window.form1 = $("#form1");
		window.form2 = $("#form2");
		form1.submit(function (ev) {
		    $.ajax({
		        type: form1.attr('method'),
		        url: form1.attr('action'),
		        data: form1.serialize(),
		        success: function (data) {
		            //alert(data);
		            $("#dataDisplay").text("");
		            $("#dataDisplay").append(data);
		        }
		    });
	        ev.preventDefault();
	    });
	    form2.submit(function (ev) {
		    $.ajax({
		        type: form2.attr('method'),
		        url: form2.attr('action'),
		        data: form2.serialize(),
		        success: function (data) {
		            //alert(data);
		        }
		    });
	        ev.preventDefault();
	    });
	</script>
</body>
</html>