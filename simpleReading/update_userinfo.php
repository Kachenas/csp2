<?php

	require 'connection.php';
	session_start(); 
	$index = $_GET['index'];
	$username = $_SESSION['username'];


	$username = mysqli_real_escape_string($conn,$_POST['username']); 
	$password = sha1(mysqli_real_escape_string($conn,$_POST['password']));
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$address = mysqli_real_escape_string($conn,$_POST['address']);
	$contactNo = mysqli_real_escape_string($conn,$_POST['contactNo']);

	


	$sql = "UPDATE customer 
			SET username = '$username',
			password = '$password',
			email = '$email',
			address = '$address',
			contactNo = '$contactNo' WHERE userID = '$index'";

	mysqli_query($conn,$sql) or die(mysqli_error($conn));

	
	header('location: editprofile.php');





 ?>