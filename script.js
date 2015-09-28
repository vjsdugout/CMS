function showRight()
{
	document.getElementById("right").style.visibility = "visible";
	document.getElementById("left").style.visibility = 'hidden';
}

function showLeft()
{
	document.getElementById("right").style.visibility = "hidden";
	document.getElementById("left").style.visibility = 'visible';
}

function checkPwd() {
	
	var str = document.getElementById("pwd_id").value;
	
    if (str.length < 6) {
		document.getElementById("error_pwd").innerHTML = "Password is too short.";
        return false;
    } else if (str.length > 50) {
		document.getElementById("error_pwd").innerHTML = "Password is too long.";
        return false;
    } else if (str.search(/\d/) == -1) {
        document.getElementById("error_pwd").innerHTML = "Must contain at least one digit.";
		return false;
    } else if (str.search(/[a-zA-Z]/) == -1) {
         document.getElementById("error_pwd").innerHTML = "Must contain atleast one letter";
		 return false;
    } else if (str.search(/[\!\@\#\$\%\^\&\*\(\)\_\+]/) == -1) {
         document.getElementById("error_pwd").innerHTML = "Password must contain at least one special character.";
		 return false;
    }
	else
	{
		document.getElementById("error_pwd").innerHTML = "";
		return true;	
	}	
}

function checkFirstname()
{
	var first_name = document.getElementById("firstname").value;
	var reg = /^[^±!@£$%^&*_+§¡€#¢§¶•ªº«\\/<>?:;|=.,]{1,20}$/;
	if(first_name.search(reg) === -1)
	{
		document.getElementById("error_fname").innerHTML = "Please enter a valid first name";
		return false;
	}
	else
	{
		document.getElementById("error_fname").innerHTML = "";	
		return true;
	}
}

function checkLastname()
{
	var last_name = document.getElementById("lastname").value;
	var reg = /^[^±!@£$%^&*_+§¡€#¢§¶•ªº«\\/<>?:;|=.,]{1,20}$/;
	if(last_name.search(reg) === -1)
	{
		document.getElementById("error_lname").innerHTML = "Please enter a valid last name";
		return false;
	}
	else
	{
		document.getElementById("error_lname").innerHTML = "";	
		return true;
	}
}

function checkBirthdate()
{
	var bday = document.getElementById("birth_day").value;
	if(bday === "")
	{
		document.getElementById("error_bday").innerHTML = "Please select a birth date.";
		return false;
	}
	else
	{
		document.getElementById("error_bday").innerHTML = "";
		return true;
	}
	
}

function checkEmail()
{
	var email = document.getElementById("mail").value;
	if(email === "")
	{
		document.getElementById("error_email").innerHTML = "Please enter an email address.";
		return false;
	}
	else
	{
		document.getElementById("error_email").innerHTML = "";
		return true;
	}
	
}

function checkGender()
{
	var count = 0;
	for (var i = 0; i<document.getElementsByName("gender").length; i++)
	{
		
		if(document.getElementsByName("gender")[i].checked)
		{
			count++;
		}
		else
		{
			continue;
		}
	}
	if(count == 0)
	{
		document.getElementById("error_gender").innerHTML = "Please select a gender.";
		return false;
	}
	else
	{
		document.getElementById("error_gender").innerHTML = "";
		return true;
	}
}
function validate()
{
	if(checkFirstname() != true || checkLastname()!= true || checkPwd() != true || checkBirthdate() != true || checkEmail() != true || checkGender() != true)
	{
		checkFirstname();
		checkLastname();
		checkPwd();
		checkBirthdate();
		checkGender();
		checkEmail();
		return false;
	}
	else
	{
		return true;
	}
}

function validate_subject()
{
	var menu_name = document.getElementById("menuName").value;
	if(menu_name.length == 0)
	{
		document.getElementById("error").innerHTML = "Subject name cannot be empty";
		return false;
	}
	return true;
}