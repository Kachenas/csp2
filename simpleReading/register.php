<?php 

function display_title() {
	echo 'Register';

}

function display_content() { ?>

		<form class="well form-horizontal" action="register_endpoint.php" method="post"  id="contact_form">
			<fieldset>

			<!-- Form Name -->
			<legend><center><h2><b>Registration Form</b></h2></center></legend><br>

			<!-- Text input-->

			<div class="form-group">
			  <label class="class='col-xs-12 col-md-6 control-label">First Name</label>  
			  <div class="class='col-xs-12 col-md-6 inputGroupContainer">
				  <div class="input-group">
				  	<input  name="firstName" placeholder="First Name" class="form-control"  type="text" required>
				  </div>
			  </div>
			</div>

			<!-- Text input-->

			<div class="form-group">
			  <label class="class='col-xs-12 col-md-6 control-label" >Last Name</label> 
			    <div class="class='col-xs-12 col-md-6 inputGroupContainer">
				    <div class="input-group">
				  		<input name="lastName" placeholder="Last Name" class="form-control"  type="text" required>
				    </div>
			  </div>
			</div>
			  
			<!-- Text input-->

			<div class="form-group">
			  <label class="class='col-xs-12 col-md-6 control-label">Username</label>  
				<div class="class='col-xs-12 col-md-6 inputGroupContainer">
				  <div class="input-group">
					  <input  id="userName" name="username" placeholder="Username" class="form-control"  type="text" 
						 oninput="validateUsername()" required>
					   <h5 id="checkValidUser"></h5>
				  </div>
				</div>
			</div>

			<!-- Text input-->

			<div class="form-group">
			  <label class="class='col-xs-12 col-md-6 control-label" >Password</label> 
			    <div class="class='col-xs-12 col-md-6 inputGroupContainer">
				    <div class="input-group">
				 		 <input id="password" name="password" placeholder="Password" class="form-control"  type="password" required>
				    </div>
			  </div>
			</div>

			<!-- Text input-->

			<div class="form-group">
			  <label class="class='col-xs-12 col-md-6 control-label" >Confirm Password</label> 
			    <div class="class='col-xs-12 col-md-6 inputGroupContainer">
				    <div class="input-group">
				  		<input id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" class="form-control"  type="password" oninput="validate()" required>
				  		<h5 id="checkValid"></h5>
				    </div>
			  </div>
			</div>
			 

			<!-- Text input-->
			<div class="form-group">
			<label class="class='col-xs-12 col-md-6 control-label">E-Mail</label>  
			  <div class="class='col-xs-12 col-md-6 inputGroupContainer">
				    <div class="input-group"> 
				  		<input name="email" placeholder="E-Mail Address" class="form-control"  type="text" oninput="validateEmail()" required>
				  		<h5 id="checkValidEmail"></h5>
				    </div>
			  </div>
			</div>

			<div class="form-group">
			<label class="class='col-xs-12 col-md-6 control-label">Address</label>  
			  <div class="class='col-xs-12 col-md-6 inputGroupContainer">
				    <div class="input-group"> 
				  		<input name="address" placeholder="Address" class="form-control"  type="text" required>
				    </div>
			  </div>
			</div>


			<!-- Text input-->
			       
			<div class="form-group">
			  <label class="class='col-xs-12 col-md-6 control-label">Contact No.</label>  
			    <div class="class='col-xs-12 col-md-6 inputGroupContainer">
			    <div class="input-group">  
			 		 <input name="contactNo" placeholder="(639)-000-0000" class="form-control" type="text" required>
			    </div>
			  </div>
			</div>

			<!-- Select Basic -->


			<!-- Button -->
			<div class="form-group">
			  <label class="class='col-xs-12 col-md-6 control-label"></label>
			  <div class="class='col-xs-12 col-md-6"><br>
			  	<input type="submit" id="registerbtn" name="registerbtn" value="Register" class="btn btn-warning">
			 		  
			  </div>
			</div>


			</fieldset>
		</form>

		<script type="text/javascript">
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
	
}

		</script>

<?php }

require 'template1.php';

?>