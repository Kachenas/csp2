<?php

	require 'connection.php';

	if(isset($_POST['edit'])){
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
		$book_id = $row['book_id'];

		echo "<img class='col-xs-3' src='$image'><br>";
		echo "<h4>".$bookName."</h4><br>";
		echo $description."<br>";
		echo "Price: ".$price."<br>";
		echo $inventoryID."<br>";
		echo "Book ID: ".$book_id."<br>";	
		echo "<hr>";
	
		}
	
	}

	echo "Edit Changes: <br>";
	echo "<form action='update_item.php?index=$index' method='post'>";
	echo "<textarea type='textarea' name='description' placeholder='$description' width='30%' height='30%'></textarea><br>";
	echo "Price: <input type='text' name='price'><br>";
	echo "<input type='hidden' name='book_id' value=$inventoryID>";
	echo "<input type='submit' class='btn btn-success' value='Save'>";
	echo "<input type='button' class='btn btn-danger' data-dismiss='modal' value='Cancel'>";
	echo "</form>";


	
		
?>