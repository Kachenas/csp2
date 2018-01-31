<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<div class="container">

    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
		<fieldset>

		<!-- Form Name -->
		<legend><center><h2><b>Registration Form</b></h2></center></legend><br>

		<!-- Text input-->

		<div class="form-group">
		  <label class="col-md-4 control-label">First Name</label>  
		  <div class="col-md-4 inputGroupContainer">
		  <div class="input-group">
		  
		  <input  name="first_name" placeholder="First Name" class="form-control"  type="text" required>
		    </div>
		  </div>
		</div>

		<!-- Text input-->

		<div class="form-group">
		  <label class="col-md-4 control-label" >Last Name</label> 
		    <div class="col-md-4 inputGroupContainer">
		    <div class="input-group">
		 
		  <input name="last_name" placeholder="Last Name" class="form-control"  type="text" required>
		    </div>
		  </div>
		</div>


		  
		<!-- Text input-->

		<div class="form-group">
		  <label class="col-md-4 control-label">Username</label>  
		  <div class="col-md-4 inputGroupContainer">
		  <div class="input-group">
		 
		  <input  id="userName" name="userName" placeholder="Username" class="form-control"  type="text" 
		 oninput="validateUsername()" required>
		  <h5 id="checkValidUser"></h5>
		    </div>
		  </div>
		</div>

		<!-- Text input-->

		<div class="form-group">
		  <label class="col-md-4 control-label" >Password</label> 
		    <div class="col-md-4 inputGroupContainer">
		    <div class="input-group">
		  
		  <input id="userPassword" name="userPassword" placeholder="Password" class="form-control"  type="password" required>
		    </div>
		  </div>
		</div>

		<!-- Text input-->

		<div class="form-group">
		  <label class="col-md-4 control-label" >Confirm Password</label> 
		    <div class="col-md-4 inputGroupContainer">
		    <div class="input-group">
		  
		  <input id="confirmPassword" name="confirmPassword" placeholder="Confirm Password" class="form-control"  type="password" oninput="validate()" required>
		  	<h5 id="checkValid"></h5>
		    </div>
		  </div>
		</div>
		 

		<!-- Text input-->
		       <div class="form-group">
		  <label class="col-md-4 control-label">E-Mail</label>  
		    <div class="col-md-4 inputGroupContainer">
		    <div class="input-group">
		 
		  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text" required>
		    </div>
		  </div>
		</div>


		<!-- Text input-->
		       
		<div class="form-group">
		  <label class="col-md-4 control-label">Contact No.</label>  
		    <div class="col-md-4 inputGroupContainer">
		    <div class="input-group">
		        
		  <input name="contact_no" placeholder="(639)" class="form-control" type="text" required>
		    </div>
		  </div>
		</div>

		<!-- Select Basic -->


		<!-- Button -->
		<div class="form-group">
		  <label class="col-md-4 control-label"></label>
		  <div class="col-md-4"><br>
		  	<input type="submit" id="registerbtn" name="registerbtn" value="Register" class="btn btn-warning" disabled>
		 		

		   
		  </div>
		</div>


		</fieldset>
	</form>
		</div>
    </div><!-- /.container -->


</body>
</html>