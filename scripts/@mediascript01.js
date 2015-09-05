// JavaScript Document
addeventlistener("load",resetpage,false);
addeventlistener("orientationchange",resetpage,false);

 function reset(){
	if (Math.abs(window) == 90){
		classval = "landscape";
		
	}
	else
	{
		classval = "portrait";
		
	}
	
	document.getElementsByTagName("main")[0].setAttribute("class",classval);
 }