function disp(form) {
	for(var counter = 1; counter < 3; counter++)
	{
		var video = "videoInput" + counter;
		var image = "imageInput" + counter;
		if (form.id == video)
		{
	        form.style.display = "block";
	        document.getElementById(image).style.display = "none";
		}
		else if (form.id == image)
		{
			form.style.display = "block";
	        document.getElementById(video).style.display = "none";
		}
	}
}

/*


*/