<?php


	// echo $_POST['edit'];
	// echo $_POST['index'];

	session_start();
	require 'connection.php';

	if(isset($_POST['edit'])){
		$index = $_POST['index'];
		$sql = "SELECT * FROM customer WHERE userID = '$index'";
		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($result))
		{

				$username = $row['username'];
				$password = $row['password'];
				$email = $row['email'];
				$address = $row['address'];
				$contactNo = $row['contactNo'];
					

				echo "<h4> Update Information <br></h4>";
				echo "<form action='update_userinfo.php?index=$index' method='post'>";
				echo "Username: <input type='text' name='username' required><br>";
				echo "Password: <input type='password' name='password' required><br>";
				echo "Email: <input type='text' name='email' required><br>";
				echo "Address: <input type='text' name='address' required><br>";
				echo "Contact No: <input type='text' name='contactNo' required><br>";
				echo "<input type='submit' class='btn btn-success' value='Save'>";
				echo "<input type='button' class='btn btn-danger' data-dismiss='modal' value='Cancel'>";
				echo "</form>";

				
			
	
		}
	
	}


	
		
?>