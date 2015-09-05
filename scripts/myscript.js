var watchID = null;
$ (document).ready(function(){
	 
	if( navigator.geolocation )
	navigator.geolocation.getCurrentPosition( success, faile)
	else
$("p").html("HTMLS Not Supported");
});

function fail(error)
{
      var errorType = {
		 0:"Unknown Error",
		 1:"permission denied by the user",           
		 2:"psition of the  user put available",
		 3:"request time out"
	  };
	  
	 var errmag =  errorType[Erro.code];
	  
	 if(condition){error.code == 0 } 
	 }

	
	$("p").html(errMsg)
	  


function suceess(position)

{
	var googleleLatLng = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
	
	var matOtn ={
	zoom       :10,
	center     :googleLatLng,
	mapTypeId  :google.maps.MapTypeId.ROAD
	}
	
	
	var pmap   = document.getElementById("map")
	
	var map    = new google.maps.Map(Pmap, mapOtn);
	
	function fail(error)
{
      var errorType = {
		 0:"Unknown Error",
		 1:"permission denied by the user",           
		 2:"psition of the  user put available",
		 3:"request time out"
	  };
	  
	 var errmag =  errorType[Erro.code];
	  
	 if(condition){error.code == 0 } 
	 }

	
	$("p").html(errMsg)
}