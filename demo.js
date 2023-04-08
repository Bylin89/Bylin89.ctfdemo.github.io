//var form = document.getElementById("submit");
//
//var field1 = form.elements[0].value;
//var field2 = form.elements[1].value;

function check(){
	var username = document.getElementById("username").value;
	var password = document.getElementById("password").value;
	if(username=="123" && password=="123"){
		alert("Congratulations!");
		window.location.href="flag.html";
		return true;
	}
	else{
		alert("Wrong password.");
		window.location.href="index.html";
		return false;
	}
	
}