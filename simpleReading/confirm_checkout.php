<?php

session_start();
require 'connection.php';

$user_id = $_GET['index'];
$totalPrice = $_POST['totalPrice'];


if (isset($_SESSION['username'])) 
{		

		$sql = "INSERT INTO cart (totalPrice,userID) VALUES ($totalPrice,$user_id)";
		$result = mysqli_query($conn,$sql);
		$cartID = mysqli_insert_id($conn);



		foreach ($_SESSION['cart'] as $id => $index) {
			$sql1 = "SELECT * FROM books WHERE inventoryID = '$index'";
			$result1 = mysqli_query($conn,$sql1);
			$row1 = mysqli_fetch_assoc($result1);
			$price = $row1['price'];
			
			$sql = "INSERT into orders (userID,bookID,price,purchaseID) VALUES ($user_id,$index,$price,$cartID)";
			mysqli_query($conn,$sql) or die(mysqli_error($conn));

		}
			unset($_SESSION['cart']);


	
	
} else {
	echo "oops log in to proceed";
}




header ('location:cart.php');


?>




	




	