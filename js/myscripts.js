function validateEmail() {
	var x = document.forms["contactForm"]["email"].value; 
	var regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

	if (!regex.test(email)) {
		alert("Enter valid email");
		return false;
	}
}