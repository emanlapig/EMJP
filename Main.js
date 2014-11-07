window.addEventListener("load",function() {
	setTimeout(function() {
    	window.scrollTo(0,0);
    }, 0);
});

function moveML(moveArray) {
	for (var i=0;i<moveArray.length;i++) {
		thisObj = moveArray[i];
		TweenLite.to(thisObj.obj, thisObj.dur, {css:{marginLeft:thisObj.val, ease:Power2.easeInOut}, delay:thisObj.delay});
	}
}