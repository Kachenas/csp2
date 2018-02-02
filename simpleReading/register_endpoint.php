<?php

	require 'connection.php';
	session_start(); 

	$firstName = mysqli_real_escape_string($conn,$_POST['firstName']);
	$lastName = mysqli_real_escape_string($conn,$_POST['lastName']);
	$username = mysqli_real_escape_string($conn,$_POST['username']); 
	$password = sha1(mysqli_real_escape_string($conn,$_POST['password']));
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$address = mysqli_real_escape_string($conn,$_POST['address']);
	$contactNo = mysqli_real_escape_string($conn,$_POST['contactNo']);

	


	$sql = "INSERT INTO customer (firstName,lastName,username,password,email,address,contactNo,role) VALUES ('$firstName','$lastName','$username','$password','$email','$address','$contactNo','regular')";
	mysqli_query($conn,$sql) or die(mysqli_error($conn));

	$_SESSION['username'] = $username;
	$_SESSION['role'] = 'regular';
	header('location: menu.php');





 ?>