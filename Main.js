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