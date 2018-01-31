<?php 
//retrieve items to be delted
session_start();

$index = $_GET['index'];
unset($_SESSION['cart'][$index]);


header('location: addItemtoCart.php');


 ?>