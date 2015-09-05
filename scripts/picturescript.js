// JavaScript Document
$.getJSON(
"http://api.flickr.com/services/feeds/photoset.gne?nsid=23922109@NOO&set=72157600976524175&format=json&Jaonxallbac=?",
function(data){createPage (data);}

);

function createPage(imgdata) 
{
	var imgs="";
	
	$("head").html(imgdata.title);
	$("#subhead").html(imgdata.description);
	
	
}

$("sortable").append(imgs);
$("sortable").sortable().disableselection();