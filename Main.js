window.addEventListener("load",function() {
	setTimeout(function() {
    	window.scrollTo(0,0);
    }, 0);
});
//document.addEventListener("touchstart", function() {}, true);


function moveML(moveArray) {
	for (var i=0;i<moveArray.length;i++) {
		thisObj = moveArray[i];
		TweenLite.to(thisObj.obj, thisObj.dur, {css:{marginLeft:thisObj.val, ease:Power2.easeInOut}, delay:thisObj.delay});
	}
}

/*function move1() {
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
}*/