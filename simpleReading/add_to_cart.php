<?php


	session_start();

	if (isset($_GET['index']))
	{
		
		$index = $_GET['index'];
		
		$_SESSION['cart'][$index] = $index;
		

		header('location: cart.php');
	}


?>