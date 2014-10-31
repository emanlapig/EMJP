<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
<title>PHPdev</title>
<script type="text/javascript" src="http://eric.manlapig.net/jquery.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Metrophobic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Noto-Sans-Japan' rel='stylesheet' type='text/css'>
<link href='http://eric.manlapig.net/PHPdev/style.css' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="greensock-v12-js/src/minified/jquery.gsap.min.js"></script>
<script type="text/javascript" src="greensock-v12-js/src/minified/TweenLite.min.js"></script>
<script type="text/javascript" src="greensock-v12-js/src/minified/plugins/CSSPlugin.min.js"></script>
<script type="text/javascript" src="greensock-v12-js/src/minified/easing/EasePack.min.js"></script>
<script type="text/javascript">
	window.addEventListener("load",function() {
		setTimeout(function() {
	    	window.scrollTo(0,0);
	    }, 0);
	});
	//document.addEventListener("touchstart", function() {}, true);
	function move1() {
		TweenLite.to("#window1", .5, {css:{marginLeft:"-340px", ease:Power2.easeInOut},delay:.4});
		TweenLite.to("#window2", .5, {css:{marginLeft:"0px", ease:Power2.easeInOut},delay:.4});
	}
	function move1b() {
		TweenLite.to("#window1", .5, {css:{marginLeft:"0px", ease:Power2.easeInOut},delay:.4});
		TweenLite.to("#window2", .5, {css:{marginLeft:"340px", ease:Power2.easeInOut},delay:.4});
	}
	function move2() {
		TweenLite.to("#window2", .5, {css:{marginLeft:"-340px", ease:Power2.easeInOut},delay:.4});
		TweenLite.to("#window3", .5, {css:{marginLeft:"0px", ease:Power2.easeInOut},delay:.4});
	}
	function move2b() {
		TweenLite.to("#window2", .5, {css:{marginLeft:"0px", ease:Power2.easeInOut},delay:.4});
		TweenLite.to("#window3", .5, {css:{marginLeft:"340px", ease:Power2.easeInOut},delay:.4});
	}
	function move3() {
		TweenLite.to("#listWindow", .5, {css:{marginLeft:"-340px", ease:Power2.easeInOut},delay:.4});
		TweenLite.to("#window1", .5, {css:{marginLeft:"0px", ease:Power2.easeInOut},delay:.4});
		TweenLite.to("#listWindow", 0, {css:{marginLeft:"340px", ease:Power2.easeInOut},delay:1});
	}
	function move4() {
		TweenLite.to("#listWindow", .5, {css:{marginLeft:"0px", ease:Power2.easeInOut},delay:.4});
		TweenLite.to("#window3", .5, {css:{marginLeft:"-340px", ease:Power2.easeInOut},delay:.4});
		TweenLite.to("#window1", 0, {css:{marginLeft:"340px", ease:Power2.easeInOut},delay:1});
		TweenLite.to("#window2", 0, {css:{marginLeft:"340px", ease:Power2.easeInOut},delay:1});
		TweenLite.to("#window3", 0, {css:{marginLeft:"340px", ease:Power2.easeInOut},delay:1});
	}
	function move5() {
		TweenLite.to("#listWindow", .5, {css:{marginLeft:"-340px", ease:Power2.easeInOut},delay:.4});
		TweenLite.to("#window4", .5, {css:{marginLeft:"0px", ease:Power2.easeInOut},delay:.4});
		TweenLite.to("#window4b", .5, {css:{marginLeft:"0px", ease:Power2.easeInOut},delay:.4});
	}
	function move5b() {
		TweenLite.to("#listWindow", .5, {css:{marginLeft:"0px", ease:Power2.easeInOut}});
		TweenLite.to("#window4", .5, {css:{marginLeft:"340px", ease:Power2.easeInOut}});
		TweenLite.to("#window4b", .5, {css:{marginLeft:"340px", ease:Power2.easeInOut}});
	}
	function move6() {
		TweenLite.to("#window4", .5, {css:{marginLeft:"-340px", ease:Power2.easeInOut},delay:.4});
		TweenLite.to("#window4", 0, {css:{marginLeft:"340px", ease:Power2.easeInOut},delay:1});
		TweenLite.to("#listWindow", 0, {css:{marginLeft:"340px", ease:Power2.easeInOut},delay:1});
		TweenLite.to("#window1", .5, {css:{marginLeft:"0px", ease:Power2.easeInOut},delay:.4});
	}
</script>
</head>
<body>
	<div id="container2">
		<form id="form1">
			<div id="windows">
				<div class="window" id="listWindow">
					<div id="addNew" class="btn1">+Add New</div>
					<div id="sort" class="btn1">Sort</div>
					<div id="reorder" class="btn1">Reorder</div>
					<div id="listCtnr">
						<?php include 'sortprint.php'; sortPrint("printData"); ?>
					</div>
				</div>
				<div class="window" id="window1">
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
									<?php include 'dd1.php';
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
				<div class="window" id="window2">
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
				<div class="window" id="window3">
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
				<div class="window" id="window4">
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
				<div class="window" id="window4b">
					<div class="header">
						<center><span class="eng2">Word</span></center>
					</div>
					<div class="windowContent">
						<span id="viewWordb">
							<center>
							Back Side
							</center>
						</span>
					</div>
				</div>
			</div>
		</form>
	</div>
	<script type="text/javascript">
		window.form1 = $("#form1");
		window.wordDefInit=false;
		window.specialRead=false;
		$(".listItem").bind('touchmove',function(event) {
			event.stopPropagation();
		});
		$("#container2").bind('touchmove',function(event) {
			event.preventDefault();
			event.stopPropagation();
		});
		$("#accept1").click(function(event) {
			$form=$("#form1");
			$.post("accept1.php",form1.serialize(),function(data){
				$("#fgentry").text("");
		    	$("#fgentry").append(data);
			});
			$(".fginput").css("margin-left","140px");
			$("#fginput0").css("margin-left","0px");
			$("#arrow1").css("display","none");
	    	$("#arrow2").css("display","inline-block");
	    	var word1Arr = document.getElementById("word1").value.split("");
	    	if (word1Arr.length<2) {
	    		$("#arrow2").css("display","none");
	    	}
	    	window.thisFg=0;
			move1();
		});
		$("#accept2").click(function(event) {
			$form=$("#form1");
			$.post("accept2.php",form1.serialize(),function(data){
				$("#wordDisplay").text("");
		    	$("#wordDisplay").append(data);
			});
			move2();
		});
		function bindList() {
			$(".listItem").bind('touchmove',function(event) {
				event.stopPropagation();
			});
			$("#container2").bind('touchmove',function(event) {
				event.preventDefault();
				event.stopPropagation();
			});
		};
		$("#back1").click(function(event) {
			move1b();
		});
		$("#back2").click(function(event) {
			move2b();
			if ($("#wordDef").val()=="") {
				$("#wordDef").removeClass("textActive").addClass("textInactive");
				wordDefInit=false;
			}
		});
		$("#back3").click(function(event) {
			move5b();
			$(".listSelected").removeClass("listSelected");
		});
		$("#delete1").click(function(event) {
			$form=$("#form1");
			$.post("delete.php",form1.serialize(),function(data){
				$("#listCtnr").text("");
				$("#listCtnr").append(data);
				bindList();
			});
			move5b();
		});
		$("#edit1").click(function(event) {
			/*$form=$("#form1");
			$.post("edit1.php",form1.serialize(),function(data){
				$("#step1input").text("");
				$("#step1input").append(data);
			});*/
	    	$("#typeField").val("");
	    	$("#wordDef").val("");
	    	$("#wordDef").removeClass("textActive").addClass("textInactive");
	    	wordDefInit=false;
	    	$("#wordTypeSelect").text("(select type)");
			$(".windowHeader1").text("Edit Word");
			$("#submitEdit").html("<div class=\"btn1\" id=\"accept4\">Accept</div>");
			bindEdit1();
			move6();
		});
		function bindEdit1() {
			$("#accept4").click(function(event) {
				$form=$("#form1");
				$.post("accept4.php",form1.serialize(),function(data){
					$("#listCtnr").text("");
					$("#listCtnr").append(data);
					bindList();
				});
				move4();
			});
		};
		function bindEdit2() {
			$("#accept3").click(function(event) {
				$form=$("#form1");
				$.post("accept3.php",form1.serialize(),function(data){
					$("#listCtnr").text("");
					$("#listCtnr").append(data);
					bindList();
				});
				move4();
			});
		};
		$("#special").click(function(event) {
			$form=$("#form1");
			$.post("special.php",form1.serialize(),function(data){
				$("#fgentry").text("");
		    	$("#fgentry").append(data);
			});
			$(".fginput").css("margin-left","140px");
			$("#fginput0").css("margin-left","0px");
			$("#arrow1").css("display","none");
	    	$("#arrow2").css("display","none");
	    	window.thisFg=0;
		});

		$("#form1").submit(function(event) {
	        return false;
	    });
	    $("#wordDef").on('touchstart',function(event) {
	    	$("#wordDef").removeClass("textInactive").addClass("textActive");
	    	if (!wordDefInit) {
	    		$("#wordDef").val("");
	    		wordDefInit=true;
	    	}
	    });
	    $("#addNew").click(function(event) {
	    	$("#word1").val("");
	    	$("#typeField").val("");
	    	$("#wordDef").val("");
	    	$("#wordDef").removeClass("textActive").addClass("textInactive");
	    	wordDefInit=false;
	    	$("#wordTypeSelect").text("(select type)");
	    	$(".windowHeader1").text("New Word Entry");
			$("#submitEdit").html("<div class=\"btn1\" id=\"accept3\">Accept</div>");
			bindEdit2();
	    	move3();
	    });
	    window.thisFg=0;
	    $("#arrow1").click(function(event) {
	    	var thisFgInput = "#fginput"+thisFg;
	    	var nextFgInput = "#fginput"+(thisFg-1);
	    	var nextNextFgInput = "#fginput"+(thisFg-2);
	    	if ($(nextFgInput).length!=0) {
	    		TweenLite.to(thisFgInput, .2, {css:{marginLeft:"140px", ease:Power2.easeInOut}});
	    		TweenLite.to(nextFgInput, .2, {css:{marginLeft:"0px", ease:Power2.easeInOut}});
	    		thisFg-=1;
	    		if ($(nextNextFgInput).length==0) {
	    			$("#arrow1").css("display","none");
	    			$("#arrow2").css("display","inline-block");
	    		} else {
	    			$("#arrow1").css("display","inline-block");
	    			$("#arrow2").css("display","inline-block");
	    		}
	    	}
	    });
	    $("#arrow2").click(function(event) {
	    	var thisFgInput = "#fginput"+thisFg;
	    	var nextFgInput = "#fginput"+(thisFg+1);
	    	var nextNextFgInput = "#fginput"+(thisFg+2);
	    	if ($(nextFgInput).length!=0) {
	    		TweenLite.to(thisFgInput, .2, {css:{marginLeft:"-140px", ease:Power2.easeInOut}});
	    		TweenLite.to(nextFgInput, .2, {css:{marginLeft:"0px", ease:Power2.easeInOut}});
	    		thisFg+=1;
	    		if($(nextNextFgInput).length==0) {
	    			$("#arrow2").css("display","none");
	    			$("#arrow1").css("display","inline-block");
	    		} else {
	    			$("#arrow1").css("display","inline-block");
	    			$("#arrow2").css("display","inline-block");
	    		}
	    	}
	    });
	    function ddOpen(activeDD) {
	    	this.thisDD = "#"+activeDD;
	    	var ddHeight = (11*24)+"px";
	    	TweenLite.to(thisDD, .2, {height:ddHeight, ease:Power2.easeInOut});
	    	$(".ddItem").css("visibility","visible");
	    };
		function ddSelect(event,item,activeDD) {
			event.preventDefault();
			event.stopPropagation();
			this.item = toString(item);
			this.thisDD = "#"+activeDD;
			TweenLite.to(thisDD, .2, {height:'24px', ease:Power2.easeInOut});
			$(thisDD+"Select").text("("+item+")");
			$(".ddItem").css("visibility","hidden");
			$("#typeField").val(item);
			$("#wordDef").val("("+item+")");
		};
		function viewWord(num) {
			thisNum=parseInt(num);
			$("#list"+thisNum).addClass("listSelected");
			$("#indexField").val(thisNum);
			$form=$("#form1");
			$.post("viewWord.php",form1.serialize(),function(data){
				$("#wordDisplay2").text("");
		    	$("#wordDisplay2").append(data);
		    	$("#word1").val(thisNum);
			});
			$("#windowHeader4").text("Word "+thisNum);
			move5();
		};
		window.touchOrig = {x:0,y:0};
		window.touchNew = {x:0,y:0};
		window.w4rotate = 0;
		window.deltaX = 0;
		window.deltaY = 0;
		window.touchSpeed = 0;
		$("#window4").bind({
			touchstart: function(e) {
				touchOrig.x = event.targetTouches[0].pageX;
				touchOrig.y = event.targetTouches[0].pageY;
				window.timeTouch = setInterval(function(){touchSpeed+=1;},10);
			},
			touchmove: function(e) {
				touchNew.x = event.targetTouches[0].pageX;
				touchNew.y = event.targetTouches[0].pageY;
				deltaX = (touchOrig.x-touchNew.x)/2;
				deltaY = (touchOrig.y-touchNew.y)/2;
				w4rotate=deltaY;
				if (w4rotate<=180 && w4rotate>=-180) {
					$("#window4").css({"transform":"rotateX("+deltaY+"deg)","webkitTransform":"rotateX("+deltaY+"deg)"});
					$("#window4b").css({"transform":"rotateX("+(180-deltaY)+"deg)","webkitTransform":"rotateX("+(180-deltaY)+"deg)"});
				};
			},
			touchend: function(e) {
				clearInterval(timeTouch);
				var fastSwipeU = false;
				var fastSwipeD = false;
				if (touchSpeed<20) {
					if (deltaY>1) {
						fastSwipeU = true;
					}
					if (deltaY<-1) {
						fastSwipeD = true;
					}
				}

				if (w4rotate>90 || w4rotate<-90 || fastSwipeU || fastSwipeD) {
					if (w4rotate>90 || fastSwipeU) {
						$("#window4").addClass("rotateTrans").css({"transform":"rotateX(180deg)","webkitTransform":"rotateX(180deg)"});
						$("#window4b").addClass("rotateTrans").css({"transform":"rotateX(0deg)","webkitTransform":"rotateX(0deg)"});
					} else if (w4rotate<-90 || fastSwipeD) {
						$("#window4").addClass("rotateTrans").css({"transform":"rotateX(-180deg)","webkitTransform":"rotateX(-180deg)"});
						$("#window4b").addClass("rotateTrans").css({"transform":"rotateX(360deg)","webkitTransform":"rotateX(360deg)"});
					}
					window.setTimeout(function() {
						if ($("#window4").hasClass("rotateTrans")) {
							$("#window4").removeClass("rotateTrans");
							$("#window4b").removeClass("rotateTrans");
						}
						$("#window4b").css({"transform":"rotateX(0deg)","webkitTransform":"rotateX(0deg)"});
						$("#window4").css({"transform":"rotateX(180deg)","webkitTransform":"rotateX(180deg)"});
					},500);
				} else {
					$("#window4").addClass("rotateTrans").css({"transform":"rotateX(0deg)","webkitTransform":"rotateX(0deg)"});
					$("#window4b").addClass("rotateTrans").css({"transform":"rotateX(180deg)","webkitTransform":"rotateX(180deg)"});
				}
				w4rotate=0;
				touchSpeed=0;
			}
		});
		
		$("#window4b").bind({
			touchstart: function(e) {
				touchOrig.x = event.targetTouches[0].pageX;
				touchOrig.y = event.targetTouches[0].pageY;
				window.timeTouch = setInterval(function(){touchSpeed+=1;},10);
			},
			touchmove: function(e) {
				touchNew.x = event.targetTouches[0].pageX;
				touchNew.y = event.targetTouches[0].pageY;
				deltaX = (touchOrig.x-touchNew.x)/2;
				deltaY = (touchOrig.y-touchNew.y)/2;
				w4rotate=deltaY;
				if (w4rotate<=180 && w4rotate>=-180) {
					$("#window4b").css({"transform":"rotateX("+deltaY+"deg)","webkitTransform":"rotateX("+deltaY+"deg)"});
					$("#window4").css({"transform":"rotateX("+(180-deltaY)+"deg)","webkitTransform":"rotateX("+(180-deltaY)+"deg)"});
				};
			},
			touchend: function(e) {
				clearInterval(timeTouch);
				var fastSwipeU = false;
				var fastSwipeD = false;
				if (touchSpeed<20) {
					if (deltaY>1) {
						fastSwipeU = true;
					}
					if (deltaY<-1) {
						fastSwipeD = true;
					}
				}
				if (w4rotate>90 || w4rotate<-90 || fastSwipeU || fastSwipeD) {
					if (w4rotate>90 || fastSwipeU) {
						$("#window4b").addClass("rotateTrans").css({"transform":"rotateX(180deg)","webkitTransform":"rotateX(180deg)"});
						$("#window4").addClass("rotateTrans").css({"transform":"rotateX(0deg)","webkitTransform":"rotateX(0deg)"});
					} else if (w4rotate<-90 || fastSwipeD) {
						$("#window4b").addClass("rotateTrans").css({"transform":"rotateX(-180deg)","webkitTransform":"rotateX(-180deg)"});
						$("#window4").addClass("rotateTrans").css({"transform":"rotateX(360deg)","webkitTransform":"rotateX(360deg)"});
					}
					window.setTimeout(function() {
						if ($("#window4").hasClass("rotateTrans")) {
							$("#window4").removeClass("rotateTrans");
							$("#window4b").removeClass("rotateTrans");
						}
						$("#window4").css({"transform":"rotateX(0deg)","webkitTransform":"rotateX(0deg)"});
						$("#window4b").css({"transform":"rotateX(180deg)","webkitTransform":"rotateX(180deg)"});
					},500);
				} else {
					$("#window4b").addClass("rotateTrans").css({"transform":"rotateX(0deg)","webkitTransform":"rotateX(0deg)"});
					$("#window4").addClass("rotateTrans").css({"transform":"rotateX(180deg)","webkitTransform":"rotateX(180deg)"});
				}
				w4rotate=0;
				touchSpeed=0;
			}
		});
	</script>
</body>
</html>