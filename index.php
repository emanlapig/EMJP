<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
<title>PHPdev</title>
<script type="text/javascript" src="http://eric.manlapig.net/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script src="jquery.ui.touch-punch.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Metrophobic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
<link href='http://eric.manlapig.net/PHPdev/style.css' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="greensock-v12-js/src/minified/jquery.gsap.min.js"></script>
<script type="text/javascript" src="greensock-v12-js/src/minified/TweenLite.min.js"></script>
<script type="text/javascript" src="greensock-v12-js/src/minified/plugins/CSSPlugin.min.js"></script>
<script type="text/javascript" src="greensock-v12-js/src/minified/easing/EasePack.min.js"></script>
<script type="text/javascript" src="Main.js"></script>
</head>
<body onload="$.getScript('Main2.js')">
	<div id="container">
		<form id="form1">
			<div id="windows">
				<!-- LIST WINDOW -->
				<div class="window" id="listWindow">
					<div id="addNew" class="btn1">+Add New</div>
					<div id="sort" class="btn1">Sort</div>
					<div id="reorder" class="btn1">Reorder</div>
					<div id="listCtnr">
						<div id="listReal">
							<?php include 'includes/sortprint.php'; printData("listItem"); ?>
						</div>
						<div id="listClone">
							<?php printData("listItemClone"); ?>
						</div>
					</div>
					<input type="text" class="input3" id="reorderField" name="reorderStr">
				</div>

				<!-- NEW WORD 1: Word/Type -->
				<div class="window" id="newWordWindow1">
					<div class="header">
						<center><span class="windowHeader1 eng2">New Word Entry</span></center>
					</div>
					<div class="windowContent">
						<div id="step1">
							<br><center>
							<span class="eng1">Enter a word</span><br>
							<span id="step1input">
								<input type="text" class="input1" onfocus="this.style.webkitTransform = 'translate3d(0px,-10000px,0)'; webkitRequestAnimationFrame(function() { this.style.webkitTransform = ''; }.bind(this))" id="word1" name="word1"><br>
							</span>
							<span id="btns1">
								<div class="btn1ctnr">
									<?php include 'includes/dd1.php';
										$items=array("n","pn","part","adj","v","adv","suf","ctr","intj","name");
										$activeDD="wordType";
										ddPrint($items,$activeDD);
									?>
								</div><div class="btn1ctnr">
									<div class="btn1" id="accept1">Accept</div>
								</div>
								<input type="text" class="input3" id="typeField" name="wordType">
								<input type="text" class="input3" id="indexField" name="wordIndex">
							</span>
							</center>
						</div>
					</div>
				</div>
				<!-- NEW WORD 2: Readings -->
				<div class="window" id="newWordWindow2">
					<div class="header">
						<center><span class="windowHeader1 eng2">New Word Entry</span></center>
					</div>
					<div class="windowContent">
						<div id="step2">
							<br><center>
							<span class="eng1">Enter readings</span><br>
							<span class="arrow" id="arrow1"><</span><span id="fgentry"></span><span class="arrow" id="arrow2">></span><br>
							<div class="btn1ctnr">
								<div class="btn1" id="back1">Back</div>
								<div class="btn1" id="accept2">Accept</div><br>
								<div class="btn2" id="special">熟字訓</div>
								<input type="text" class="input3" id="specField" name="specRead" value="0">
							</div>
							</center>
						</div>
					</div>
				</div>
				<!-- NEW WORD 3: Definition -->
				<div class="window" id="newWordWindow3">
					<div class="header">
						<center><span class="windowHeader1 eng2">New Word Entry</span></center>
					</div>
					<div class="windowContent">
						<div id="step3">
							<br><center>
							<span class="eng1">Enter a definition</span><br>
							<textarea rows="4" cols="24" class="textInactive" id="wordDef" name="wordDef" onfocus="this.style.webkitTransform = 'translate3d(0px,-10000px,0)'; webkitRequestAnimationFrame(function() { this.style.webkitTransform = ''; }.bind(this));"></textarea><br>
							<span id="wordDisplay"></span><br>
							<div class="btn1ctnr">
								<div class="btn1" id="back2">Back</div>
								<span id="submitEdit"><div class="btn1" id="accept3">Accept</div></span>
							</div>
							</center>
						</div>
					</div>
				</div>

				<!-- VIEW WORD WINDOW -->
				<div class="window" id="viewWordWindow1">
					<div class="header">
						<center><span class="eng2" id="windowHeader4">Word</span></center>
					</div>
					<div class="windowContent">
						<span id="viewWord">
							<center>
							<span id="wordDisplay2"></span><br>
							<span class="btn3ctnr">
								<div class="btn3" id="edit1">Edit</div>
								<div class="btn3" id="delete1">Delete</div><br>
								<div class="btn3" id="back3">Close</div>
							</span>
							</center>
						</span>
					</div>
				</div>
				<div class="window" id="viewWordWindow2">
					<div class="header">
						<center><span class="eng2">Word</span></center>
					</div>
					<div class="windowContent">
						<span id="viewWordb">
							<center>Back Side</center>
						</span>
					</div>
				</div>
			</div>
		</form>
	</div>
</body>
</html>