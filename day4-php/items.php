<?php
	
	require_once "items.php";

	function display_content() {
		$categories = array_unique(array_column($items, category));

		echo "<div class='row'><select><option>All</option>";
		foreach ($categories as $category) {
			echo "<option>$category</option>";
		}
		echo "</select><button>SOrt By category</button></div>";

		echo "<div class='row'>";
		foreach ($items as $item) {

			echo "<div class='col-xs-4'><img src='".$item['img']."'>";
			echo "<h5>".$item['name']."</h5>";
			echo "Price: Php".$item['price']."<br>";
		}
	}


?>