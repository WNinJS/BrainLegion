function checkMail(emailA, error){
	email = emailA.value
	error = document.getElementById("email-error")

	if (email.indexOf("@") === -1){
		error.style.visibility = "visible"
		return false
	}else{
		part = email.split("@")
		let index = part[1].indexOf(".")
		if (index === -1 || part[0].length === 0 || index === part[1].length - 1){
			error.style.visibility = "visible"
			return false
		}else{
			error.style.visibility = "hidden"
			return true
		}
	}
	return false
}

function checkQuestion(text, error){
	text = document.getElementById("text")
	error = document.getElementById("textarea-error")
	if (!text.value)	{
		error.style.visibility = "visible"
		return false
	}else {
		error.style.visibility = "hidden"
		return true
	}
	return false
}

function checkName(text, error) {
	text = document.getElementById("name")
	element = document.getElementById("name-error")
	if (!text.value)	{
		error.style.visibility = "visible"
		return false
	}else {
		error.style.visibility = "hidden"
		return true
	}
	return false
}

function validatePhone(tel){
	let del = false
	let index = false

	// Clutch
	if (tel.value[6] === ")"){
		if (tel.value[7] !== " "){
			del = true
		}
	} else if (tel.value.indexOf("(") != -1){
		if (tel.value.indexOf(")") === -1){
			del = true
		}
	}

	let value = checkValid(tel.value)
	let part = value.split(" ")

	part[0] = "8 "

	if (part[1] != undefined && part[1].length !== 0) {
		if (!del){
			if (part[1].length === 3) {
				part[1] = "(" + part[1] + ")"
			}
		if (part[1].length > 0 && part[1].length < 3  && part[2] != undefined){
			if (part[2].length != 0){
				part[1] = "(" + part[1] + ")"
				index = true
			}
		}
		}else {
			if (part[2] != undefined && part[2].length > 0){
				part[1] = part[1].substring(0, 2) + part[2][0]
				if (part[1].length === 3) {
					part[1] = "(" + part[1] + ")"
				}
				if (part[2].length === 1) part[2] = ""
				else part[2] = part[2].substring(1, part[2].length)
			}else part[1] = part[1].substring(0, 2)
		}
	}

	if (part[2] != undefined && part[2].length !== 0) {
		temp = part[2].replace("-", "")
			if (temp.length > 3 && temp.length < 6){
				temp = temp.substring(0, 3) + "-" + temp.substring(3, temp.length)
			} else if (temp.length > 5) {
				if(temp.length > 7) temp = temp.substring(0, 6) + temp[temp.length-1]
				temp = temp.substring(0, 3) + "-" + temp.substring(3, 5) + "-" + temp.substring(5,temp.length)
			}
		part[2] = temp
		}

	tel.value = part[0]
	if (part[1] === "" && part[2].length != 0) {
		part[1] = undefined;
		part[2] = undefined;
	}

	if (part[1] != undefined){
		if (part[1][0] === '(' && part[1][part[1].length-1] === ')') {
			tel.value = tel.value + part[1] + " "
		}else{
			tel.value = tel.value + part[1]

		}
	}

	if (part[2] != undefined) tel.value = tel.value + part[2]
	if (index) {
		let pos = tel.value.indexOf(")")
		if (pos != -1){
				tel.selectionStart = pos;
			    tel.selectionEnd = pos;
			    tel.focus ();
		    }
		index = false
    }

}

function checkValid(origin){
	temp = ""
	for (i = 0; i < origin.length; i++) {
		if (origin[i] >= '0' && origin[i] <= '9') {
			temp += origin[i]
		}
		if (origin[i] == ' '){
			temp += origin[i]
		}
	}
	return temp
}

function addPhone(tel) {
	if (tel.value == "") tel.value = "8 "
}

function checkPhone(tel, error){
	part = tel.value.split(" ")
	error = document.getElementById("phone-error")
	if (part[0].length !== 1 || part[1].length !== 5 || part[2].length !== 9) {
		error.style.visibility = "visible"
		return false
	}else{
		error.style.visibility = "hidden"
		return true
	}
}

function send_data(event, post_data) {
	var form_status = document.getElementById("contact-form-status");
	var http = new XMLHttpRequest();
	event.preventDefault();
	if ("withCredentials" in http){
		http.open("POST", "http://brainlegion.ru/res/js/sendForm.php", true);
		http.onreadystatechange = function() {
			if (http.readyState == 4 && http.status == 200) {
				// alert(http.responseText);
				form_status.style.visibility = "visible";
				form_status.classList.add("text-success");
				form_status.classList.remove("text-danger");
				form_status.innerHTML = "Сообщение отправлено!";
				document.getElementById("contact-form").reset();
				document.getElementById("file").innerHTML = document.getElementById("file").innerHTML;
				document.getElementById("upload-path").innerHTML = "";
				setTimeout(function() { form_status.style.visibility = "hidden" }, 2000);
			}
		}
		http.onerror = function() {
			form_status.style.visibility = "visible";
			form_status.classList.add("text-danger");
			form_status.classList.remove("text-success");
			form_status.innerHTML = "Произошла ошибка, попробуйте ещё раз!";
			//document.getElementById("contact-form").reset();
			// if (document.getElementById("file")) {
			// 	document.getElementById("file").innerHTML = docu2ment.getElementById("file").innerHTML;
			// }
			// if (document.getElementById("upload-path")) {
			// 	document.getElementById("upload-path").innerHTML = "";
			// }
			setTimeout(function() { form_status.style.visibility = "hidden" }, 2000);
		}
		http.send(post_data);
	}

	// event.preventDefault()
	// $.ajax({
	//   url: 'res/js/sendForm.php',
	//   data: post_data,
	//   processData: false,
	//   contentType: false,
	//   type: 'POST',
	//   dataType:'json',
	//   success: function(data){
	// 		//load json data from server and output message
	// 		if(data.type == 'error') {
	// 			form_status.style.visibility = "visible";
	// 			form_status.classList.add("text-danger");
	// 			form_status.classList.remove("text-success");
	// 			form_status.innerHTML = "Произошла ошибка, попробуйте ещё раз!";
	// 			document.getElementById("contact-form").reset();
	// 			document.getElementById("file").innerHTML = document.getElementById("file").innerHTML;
	// 			document.getElementById("upload-path").innerHTML = "";
	// 			setTimeout(function() { form_status.style.visibility = "hidden" }, 2000);
	// 		} else {
	// 			form_status.style.visibility = "visible";
	// 			form_status.classList.add("text-success");
	// 			form_status.classList.remove("text-danger");
	// 			form_status.innerHTML = "Сообщение отправлено!";
	// 			document.getElementById("contact-form").reset();
	// 			document.getElementById("file").innerHTML = document.getElementById("file").innerHTML;
	// 			document.getElementById("upload-path").innerHTML = "";
	// 			setTimeout(function() { form_status.style.visibility = "hidden" }, 2000);
	// 		}
	// 	  }
	// 	});

}

function isValidFull(event){
	_questIsVal = checkQuestion(document.getElementById("text"), document.getElementById("textarea-error"))
	_nameIsVal  = checkName(document.getElementById("name"), document.getElementById("name-error"))
	_phoneIsVal = checkPhone(document.getElementById("phone"), document.getElementById("phone-error"))
	_mailIsVal  = checkMail(document.getElementById("email"), document.getElementById("email-error"))

	if (_phoneIsVal && _mailIsVal && _questIsVal && _nameIsVal) {
		var post_data = new FormData();
		if (document.getElementById("name") != undefined)
			post_data.append( 'name', document.getElementById("name").value);
		if (document.getElementById("email") != undefined)
			post_data.append( 'email', document.getElementById("email").value );
		if (document.getElementById("subjectSelect") != undefined)
			post_data.append( 'subject', document.getElementById("subjectSelect").options[document.getElementById("subjectSelect").selectedIndex].text)
		if (document.getElementById("phone") != undefined)
			post_data.append( 'phone', document.getElementById("phone").value );
		if (document.getElementById("text") != undefined)
			post_data.append( 'text', document.getElementById("text").value );
		if (document.getElementById("file") != undefined)
			post_data.append( 'file[]', document.getElementById("file").files[0]);

		send_data(event, post_data);

	} else {
		event.preventDefault()
	}
}

function isValidLite(event){
	_nameIsVal  = checkName(document.getElementById("name"), document.getElementById("name-error"));
	_phoneIsVal = checkPhone(document.getElementById("phone"), document.getElementById("phone-error"));

	if (_phoneIsVal && _nameIsVal){

		var post_data = new FormData();
		if (document.getElementById("name") != undefined)
			post_data.append( 'name', document.getElementById("name").value);
		if (document.getElementById("email") != undefined)
			post_data.append( 'email', document.getElementById("email").value );
		if (document.getElementById("subjectSelect") != undefined)
			post_data.append( 'subject', document.getElementById("subjectSelect").options[document.getElementById("subjectSelect").selectedIndex].text);
		if (document.getElementById("phone") != undefined)
			post_data.append( 'phone', document.getElementById("phone").value );
		if (document.getElementById("text") != undefined)
			post_data.append( 'text', document.getElementById("text").value );
		if (document.getElementById("file") != undefined)
			post_data.append( 'file[]', document.getElementById("file").files[0]);

		send_data(event, post_data);

	} else {
		event.preventDefault()
	}
}

$("#contact-form").submit(function(event) {
	if (document.getElementById("email") == undefined) isValidLite(event);
	else isValidFull(event);
});
