<?php
	$index = $_POST['index'];
	$string = file_get_contents("assets/items.json");
	$items = json_decode($string, true);

	$img = $items[$index]['img'];
	$name = $items[$index]['name'];
	$description = $items[$index]['description'];
	$price = $items[$index]['price'];
	echo "<div class='row'>";
	echo "<div class='col-xs-4 item_display'><form method='post' action='edit.php?index=$index'><img src='$img'>";
	echo "Name: <input type='text' name='name' value='$name'><br>";
	echo "Description: <textarea name='description'>$description</textarea><br>";
	echo "Price: Php <input type='number' name='price' min=0 value='$price'><br>";
	echo "<input type='button' class='btn btn-danger' data-dismiss='modal' value='Cancel'>";
	echo "<a href='addItem.php'><input type='submit' class='btn btn-success' value='Save Item'></a>";
	echo "</form></div></div>";	
?>