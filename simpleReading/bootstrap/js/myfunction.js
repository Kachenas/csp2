function validate() {
        var password = document.getElementById("userPassword").value;
        var confirmPassword = document.getElementById("confirmPassword").value;
        if (password != confirmPassword && password.length != confirmPassword.length) {
                document.getElementById('checkValid').innerHTML = "Password do not Match";
                
        } else {
                document.getElementById('checkValid').innerHTML = "Password Match";
                document.getElementById('registerbtn').disabled=false;
        }
    }

function validateUsername() {
	var users;

	document.getElementById.getJSON("assets/users.json", function(json){
			users = json
	})

	/*getting the input in the array php
	$string = file_get_contents("assets/users.json");
	converting the input to array as the get input is stored as string  
	$users = json_decode($string, true);  */

	var userInput = document.getElementById('userName').value;

	if (isset(users['userInput'])) {
		document.getElementById('checkValidUser').innerHTML = "Username already exist";
	} else {
		document.getElementById('checkValidUser').innerHTML = "Username available";
	}
}


function validateEmail() {
	var email = document.getElementById('email').value();
	console.log('email');
}
