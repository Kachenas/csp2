<?php
session_start();
require 'connection.php';

	
	$username = $_POST['username']; 
	$password = sha1($_POST['password']); 


	$sql = "SELECT * FROM customer WHERE username = '$username' AND password = '$password'"; //step 1
	$result = mysqli_query($conn,$sql); //step 2

	if(mysqli_num_rows($result)>0){
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $username;
		$_SESSION['role'] = $row['role'];

		if ($_SESSION['role'] == 'admin') {
			header('location: adminpage.php');
		}
		else if ($_SESSION['role'] != 'admin' && $_SESSION['role'] == 'regular'){
			header('location: index.php');
		}

	}
	else {
		header('location:login.php?error=true');
	} 
	


?>