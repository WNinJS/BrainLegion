function disp(form) {
	if (form.id == "videoInput") 
	{

        form.style.display = "block";
        document.getElementById('imageInput').style.display = "none";
	}
	else if (form.id == "imageInput")
	{
		form.style.display = "block";
        document.getElementById('videoInput').style.display = "none";
	}
}

