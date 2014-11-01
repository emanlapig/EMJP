<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHPdev</title>
<script type="text/javascript" src="http://eric.manlapig.net/jquery.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Metrophobic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Noto-Sans-Japan' rel='stylesheet' type='text/css'>
<style type="text/css">
	#table1,#table2,#table3,#table4 {
		width:900px;
		padding:0px;
		margin:0px;
		top:0px;
		left:0px;
	}

	.tr1 {
		height:40px;
		background-color:#000000;
		color:#ffffff;
		font-family:'Metrophobic';
	}
	.tr0 {
		height:40px;
		background-color:#D1D1D1;
		color:#000000;
		font-family:'Metrophobic';
	}
	.trform {
		height:150px;
		background-color:#999999;
		color:#000000;
		font-family:'Metrophobic';
	}

	span {
		padding-left:10px;
		display:inline-block;
	}
	@font-face {
		font-family: 'Noto-Sans-Japan';
		src: url("NotoSansJP-Regular.otf") format("opentype");
	}
</style>
</head>
<body>
	<center>
		<form id="form1">
			<table id="table1" border="0">
				<tr style="padding:0px">
					<td id="tr-top" style="padding:0px">
						<table id="table3" border="0">
							<tr>
								<td class="tr1" style="width:30px">
									<span><input type="checkbox" style="visibility:hidden"></span>
								</td>
								<td class="tr1" style="width:30px">
									<span><center>#</center></span>
								</td>
								<td class="tr1" style="width:150px">
									<span>Kanji</span>
								</td>
								<td class="tr1" style="width:150px">
									<span>Kana</span>
								</td>
								<td class="tr1" style="width:400px">
									<span>Definition</span>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr id="dataDisplay" style="padding:0px">
					<td style="padding:0px">
						<?php include 'sortprint.php'; sortPrint("printData"); ?>
					</td>
				</tr>
				<tr style="padding:0px">
					<td id="tr-btm" style="padding:0px">
						<table id="table4" border="0">
							<tr>
								<td class="trform" style="width:30px">
									<span><input type="checkbox" style="visibility:hidden"></span>
								</td>
								<td class="trform" style="width:30px">
									<span><center>#</center></span>
								</td>
								<td class="trform" style="width:150px">
									<span style="width:140px"><input type="text" name="word"></span>
								</td>
								<td class="trform" style="width:150px">
									<span style="width:140px"><input type="text" name="word2"></span>
								</td>
								<td class="trform" style="width:400px">
									<span style="display:inline-block"><textarea rows="2" cols="40" name="wordDef"></textarea>
										<br>
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
										<input type="button" id="submit" value="Submit">
										<input type="button" id="delete" value="Delete Selected">
										<script type="text/javascript">
											window.form1 = $("#form1");
											//window.button1 = $("#submit");
											//window.button2 = $("#delete");

											$("#submit").click(function(event) {
												$form=$("#form1");
												$.post("submit.php",form1.serialize(),function(data){
													$("#dataDisplay").text("");
											    	$("#dataDisplay").append(data);
												});
											});
											$("#delete").click(function(event) {
												$form=$("#form1");
												$.post("delete.php",form1.serialize(),function(data){
													$("#dataDisplay").text("");
											    	$("#dataDisplay").append(data);
											     });
											});

											$("#form1").submit(function (ev) {
										        return false;
										    });
										</script>
									</span>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>