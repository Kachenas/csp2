<?php
	$index = $_GET['index'];

	require 'connection.php';

	$sql = "DELETE FROM books WHERE inventoryID = '$index'";
	mysqli_query($conn,$sql) or die(mysqli_error($conn));

	header('location: adminpage.php?id=4');

?>