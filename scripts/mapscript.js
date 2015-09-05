window.addEventListener(
"load",

 function(){
	 document.getElementById("draggable").addEventListener("touchmove",move,false);
	 },
 function(){
	document.getElementById("draggable").addEventListener("touchmove",moves,false);
},
false
);

function androidSS(){
	if (navigator.userAgent.match(/android/i)){
		var fileref = document.createAttribute("link");
		fileref.setAttribute("rel","stylesheet");
		fileref.setAttribute("herf"," script03.css");
		document.getElementsByTagName("head")[0].appendchild(fileref);
	}

function move(evt){
	evt.preventDefault();
	var dragbox = document.getElementById("draggable");
	
	dragbox.style.left = (evt.changedTouches[0].pageX - 100) + "px";
	dragbox.style.left = (evt.changedTouches[0].pageY - 100) + "px";
}
}