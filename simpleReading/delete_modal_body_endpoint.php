<?php

	require 'connection.php';


		$index = $_POST['index'];
		$sql = "SELECT * FROM books WHERE inventoryID = '$index'";
		$result = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_assoc($result))
		{

		$inventoryID = $row['inventoryID'];
		$image = $row['image'];
		$bookName = $row['bookName'];
		$description = $row['description'];
		$price = $row['price'];


		echo "<img class='col-xs-3' src='$image'><br>";
		echo "<h4>".$bookName."</h4><br>";
		echo $description."<br>";
		echo $price."<br>";
		echo "<br>";
		echo "Are you sure you want to delete this item? <br>";
	
		}
	


	echo "<form action='delete.php?index=$index' method='post'>";
	echo "<input type='submit' class='btn btn-success' value='YES'>";
	echo "<input type='button' class='btn btn-danger' data-dismiss='modal' value='NO'>";
	echo "</form>";


	
		
?>