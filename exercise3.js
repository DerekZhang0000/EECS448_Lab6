function checkInputs()
{
	return (checkEmail() && checkPassword() && checkQuantities());
}
function checkEmail() 
{
	if (document.getElementsByName("username")[0].value.toLowerCase().match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/) == null)
  	{
		alert("Invalid email");
		return false;
  	}
	return true;
}

function checkPassword()
{
	if (document.getElementsByName("password")[0].value == "")
	{
		alert("Invalid password");
		return false;
	}
	return true;
}
function checkQuantities()
{
	if (!(document.getElementsByName("box")[0].value >= 0 && document.getElementsByName("banana")[0].value >= 0 && document.getElementsByName("tape")[0].value >= 0))
	{
		alert("Invalid quantities");
		return false;
	}
	return true;
}
