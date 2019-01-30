


function closeImg(div) {
	for(var counter = 1; counter < 3; counter++)
	{
		var image = "picture" + counter;
	    if (div.id == image)
	    {
	    	alert(div.id);
	    	document.getElementById(image).style.display = "none";
		}
	}	
}