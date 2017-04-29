function ValidateEmail(email, subject, body){
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(email.value.match(mailformat)){
		window.alert("Message successfully sent!\n" + "From: " + email.value + "\nSubject: " + 
		subject.value + "\nMessage: " + body.value)
		document.form1.text1.focus();
		return true;
	}else{
		alert("Email address invalid!");
		document.form1.text1.focus();
		return false;
	}
}