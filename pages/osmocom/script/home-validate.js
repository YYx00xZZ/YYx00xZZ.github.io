       function validateEmail() {
       	var email;

       	email = document.getElementById("subscribeUserMail").value;

       		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

       		if (reg.test(subscribeUserMail.value) == false)
       		{
       			document.getElementById("subscribeUserMail").style.borderColor = "red";
       			document.getElementById("field").innerHTML = "Invalid Email" + email;
       				return false;
       		} else {
       			document.getElementById("subscribeUserMail").style.borderColor = "DarkGreen";
       			document.getElementById("field").innerHTML = "Valid Email " + email;

       		}
       		return true;
       }