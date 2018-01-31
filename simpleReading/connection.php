<?php

$host = 'localhost';
$username = 'root';
$password = '';
$db = 'ecommerce';

$conn = mysqli_connect($host,$username,$password,$db);

if (!$conn) {
	die ("Connection Failed:" . mysqli_error($conn));
} 
else {
	mysqli_set_charset($conn,'utf8');
}

$sql = "SELECT * FROM books";
$result = mysqli_query($conn,$sql);

?>