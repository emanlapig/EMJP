window.form1 = $("#form1");
window.wordDefInit=false;
window.specialRead=false;
$(".listItem").bind('touchmove',function(event) {
	event.stopPropagation();
});
$("#container").bind('touchmove',function(event) {
	event.preventDefault();
	event.stopPropagation();
});
$("#accept1").click(function(event) {
	$form=$("#form1");
	$.post("includes/accept1.php",form1.serialize(),function(data){
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
	moveML([
		{obj:"#newWordWindow1", dur:.5, val:"-340px", delay:.4},
		{obj:"#newWordWindow2", dur:.5, val:"0px", delay:.4}
	]);
});
$("#accept2").click(function(event) {
	$form=$("#form1");
	$.post("includes/accept2.php",form1.serialize(),function(data){
		$("#wordDisplay").text("");
    	$("#wordDisplay").append(data);
	});
	moveML([
		{obj:"#newWordWindow2", dur:.5, val:"-340px", delay:.4},
		{obj:"#newWordWindow3", dur:.5, val:"0px", delay:.4}
	]);
});
function bindList() {
	$(".listItem").bind('touchmove',function(event) {
		event.stopPropagation();
	});
	$("#container").bind('touchmove',function(event) {
		event.preventDefault();
		event.stopPropagation();
	});
};
$("#back1").click(function(event) {
	moveML([
		{obj:"#newWordWindow1", dur:.5, val:"0px", delay:.4},
		{obj:"#newWordWindow2", dur:.5, val:"340px", delay:.4}
	]);
});
$("#back2").click(function(event) {
	moveML([
		{obj:"#newWordWindow2", dur:.5, val:"0px", delay:.4},
		{obj:"#newWordWindow3", dur:.5, val:"340px", delay:.4}
	]);
	if ($("#wordDef").val()=="") {
		$("#wordDef").removeClass("textActive").addClass("textInactive");
		wordDefInit=false;
	}
});
$("#back3").click(function(event) {
	event.preventDefault();
	event.stopPropagation();
	moveML([
		{obj:"#listWindow", dur:.5, val:"0px", delay:.4},
		{obj:"#viewWordWindow1", dur:.5, val:"340px", delay:.4},
		{obj:"#viewWordWindow2", dur:.5, val:"340px", delay:.4},
	]);
	$(".listSelected").removeClass("listSelected");
});
$("#delete1").click(function(event) {
	$form=$("#form1");
	$.post("includes/delete.php",form1.serialize(),function(data){
		$("#listCtnr").text("");
		$("#listCtnr").append(data);
		bindList();
	});
	moveML([
		{obj:"#listWindow", dur:.5, val:"0px", delay:.4},
		{obj:"#viewWordWindow1", dur:.5, val:"340px", delay:.4},
		{obj:"#viewWordWindow2", dur:.5, val:"340px", delay:.4},
	]);
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
	moveML([
		{obj:"#viewWordWindow1", dur:.5, val:"-340px", delay:.4},
		{obj:"#viewWordWindow2", dur:0, val:"340px", delay:1},
		{obj:"#listWindow", dur:0, val:"340px", delay:.4},
		{obj:"#newWordWindow1", dur:.5, val:"0px", delay:1}
	]);
});
function bindEdit1() {
	$("#accept4").click(function(event) {
		$form=$("#form1");
		$.post("includes/accept4.php",form1.serialize(),function(data){
			$("#listCtnr").text("");
			$("#listCtnr").append(data);
			bindList();
		});
		moveML([
			{obj:"#listWindow", dur:.5, val:"0px", delay:.4},
			{obj:"#newWordWindow3", dur:.5, val:"-340px", delay:.4},
			{obj:"#newWordWindow1", dur:0, val:"340px", delay:1},
			{obj:"#newWordWindow2", dur:0, val:"340px", delay:1},
			{obj:"#newWordWindow3", dur:0, val:"340px", delay:1}
		]);
	});
};
function bindEdit2() {
	$("#accept3").click(function(event) {
		$form=$("#form1");
		$.post("includesaccept3.php",form1.serialize(),function(data){
			$("#listCtnr").text("");
			$("#listCtnr").append(data);
			bindList();
		});
		moveML([
			{obj:"#listWindow", dur:.5, val:"0px", delay:.4},
			{obj:"#newWordWindow3", dur:.5, val:"-340px", delay:.4},
			{obj:"#newWordWindow1", dur:0, val:"340px", delay:1},
			{obj:"#newWordWindow2", dur:0, val:"340px", delay:1},
			{obj:"#newWordWindow3", dur:0, val:"340px", delay:1}
		]);
	});
};
$("#special").click(function(event) {
	$form=$("#form1");
	$.post("includes/special.php",form1.serialize(),function(data){
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
	moveML([
		{obj:"#listWindow", dur:.5, val:"-340px", delay:.4},
		{obj:"#newWordWindow1", dur:.5, val:"0px", delay:.4},
		{obj:"#listWindow", dur:0, val:"340px", delay:1}
	]);
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
function viewWord(wordObj) {
	var num = wordObj.num;
	var kanji = wordObj.kanji;
	var fg = wordObj.fg;
	var type = wordObj.type;
	var def = wordObj.def;
	//thisNum=parseInt(num);
	$("#list"+num).addClass("listSelected");
	/*$("#indexField").val(thisNum);
	$form=$("#form1");
	$.post("viewWord.php",form1.serialize(),function(data){ 
		$("#wordDisplay2").text("");
    	$("#wordDisplay2").append(data);
    	$("#word1").val("");
	});*/
	
	var kanjiArray = kanji.split(",");
	var fgArray = fg.split(",");
	var wordSplit = "";
	var len = kanjiArray.length;
	var ksize = 0;
	if (len<8) {
		ksize = "kanji5";
	} else {
		ksize = "kanji2";
	}

	for (var i=0;i<len;i++) {
		wordSplit+="<span class=\"kfg3\"></center>";
		wordSplit+="<span class=\"fg3\">"+fgArray[i]+"</span>";
		wordSplit+="<span class=\""+ksize+"\">"+kanjiArray[i]+"</span></center></span>";
	}
	wordSplit+="<br><br><span class=\"def2\"><center>("+type+") "+def+"</center></span><br><br>";

	$("#wordDisplay2").text("");
	$("#wordDisplay2").append(wordSplit);

	$("#windowHeader4").text("Word "+num);
	moveML([
		{obj:"#listWindow", dur:.5, val:"-340px", delay:.4},
		{obj:"#viewWordWindow1", dur:.5, val:"0px", delay:.4},
		{obj:"#viewWordWindow2", dur:.5, val:"0px", delay:.4}
	]);
};
window.touchOrig = {x:0,y:0};
window.touchNew = {x:0,y:0};
window.w4rotate = 0;
window.deltaX = 0;
window.deltaY = 0;
window.touchSpeed = 0;
function bindFlip(window1,window2) {
	$(window1).bind({
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
				$(window1).css({"transform":"rotateX("+deltaY+"deg)","webkitTransform":"rotateX("+deltaY+"deg)"});
				$(window2).css({"transform":"rotateX("+(180-deltaY)+"deg)","webkitTransform":"rotateX("+(180-deltaY)+"deg)"});
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
					$(window1).addClass("rotateTrans").css({"transform":"rotateX(180deg)","webkitTransform":"rotateX(180deg)"});
					$(window2).addClass("rotateTrans").css({"transform":"rotateX(0deg)","webkitTransform":"rotateX(0deg)"});
				} else if (w4rotate<-90 || fastSwipeD) {
					$(window1).addClass("rotateTrans").css({"transform":"rotateX(-180deg)","webkitTransform":"rotateX(-180deg)"});
					$(window2).addClass("rotateTrans").css({"transform":"rotateX(360deg)","webkitTransform":"rotateX(360deg)"});
				}
				window.setTimeout(function() {
					if ($(window1).hasClass("rotateTrans")) {
						$(window1).removeClass("rotateTrans");
						$(window2).removeClass("rotateTrans");
					}
					$(window2).css({"transform":"rotateX(0deg)","webkitTransform":"rotateX(0deg)"});
					$(window1).css({"transform":"rotateX(180deg)","webkitTransform":"rotateX(180deg)"});
				},500);
			} else {
				$(window1).addClass("rotateTrans").css({"transform":"rotateX(0deg)","webkitTransform":"rotateX(0deg)"});
				$(window2).addClass("rotateTrans").css({"transform":"rotateX(180deg)","webkitTransform":"rotateX(180deg)"});
			}
			deltaX = 0;
			deltaY = 0;
			w4rotate=0;
			touchSpeed=0;
		}
	});
}

bindFlip("#viewWordWindow1","#viewWordWindow2");
bindFlip("#viewWordWindow2","#viewWordWindow1");

window.reordering=false;
window.moving=0;
window.cloneArray = new Array();
window.cloneClone = new Array();

$("#reorder").click(function(event) {
	$("#listReal").css("visibility","hidden");
	$("#listClone").css("visibility","visible");
	$(".listItemClone").draggable({axis:"y"}).css("z-index","10000");
	cloneArray = cloneStr.split(",");
	cloneClone = cloneArray.slice(0);
});

function moveWord(num) {
	window.ph=document.getElementById("listClone"+num);
	window.phHeight = ph.scrollHeight;
	$("#listClone"+num).css("z-index","1000").hover(function() {});
	reordering=true;
	moving=num;
}
function cloneMO(num) {
	if (reordering) {
		swap = cloneArray.indexOf(moving.toString());
		swapWith = cloneArray.indexOf(num.toString());
		if ($("#listClone"+num).css("top")=="0px" || $("#listClone"+num).css("top")=="auto") {
			if (swap>swapWith) {
				$("#listClone"+num).css("top",""+(phHeight+2)+"px");
			} else {
				$("#listClone"+num).css("top","-"+(phHeight+2)+"px");
			}
		} else {
			$("#listClone"+num).css("top","0px");
		}
		var b = cloneArray[swapWith];
		cloneArray[swapWith] = cloneArray[swap];
		cloneArray[swap] = b;
	}
}

function endMove() {
	reordering=false;
	window.reorderStr = "";
	cloneArray.reverse();
	for (var i=0;i<cloneArray.length;i++) {
		reorderStr += cloneArray[i]+",";
	}
	$("#reorderField").val(reorderStr);
	$form=$("#form1");
	$.post("includes/reorder.php",form1.serialize(),function(data){
		//var divs = data.split("<a id='break'></a>");
		$("#listClone").text("");
		$("#listClone").append(data);
		//bindList();
		//$("#listClone").text("");
		//$("#listClone").append(divs[1]);
	});

}

$("#sort").click(function(event) {
	$form=$("#form1");
	$.post("includes/fix.php",form1.serialize(),function(data){
		//var divs = data.split("<a id='break'></a>");
		$("#listCtnr").text("");
		$("#listCtnr").append(data);
		//bindList();
		//$("#listClone").text("");
		//$("#listClone").append(divs[1]);
	});
});