<?php 
//retrieve items to be delted
session_start();

$index = $_GET['index'];
$quantity = $_POST['quantity'];

$_SESSION['cart'][$index] = $quantity; 


header('location: addItemtoCart.php');


 ?>