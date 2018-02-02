<?php
function display_title(){
	echo "Index";
}

function display_content(){ 
	// $error = $_GET['error'];
	?>

	
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-lg-4">
				<form method="POST" action="authenticate.php">
				  <div class="form-group" >
				    <label for="username">Username</label>
				    <input type="text" class="form-control" id="username" name="username">
				    <small class="form-text text-muted">Please Enter your Username.</small>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" name="password">
				    <small class="form-text text-muted">Please Enter your Password.</small>
				    <?php 
				    if(isset($_GET['error'])){
				    	echo "<p id='wrong-login'>Wrong Log Credentials</p>";
				    }
				    ?>
				  </div>
				  <div class="form-group">
				  	<p>Dont have an account? Register <a href="register.php">Here.</a></p>
				  </div>
				  <button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>


 <?php }

require "template1.php";


?>

