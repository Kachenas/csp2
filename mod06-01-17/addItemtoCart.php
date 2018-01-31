<?php

	function display_title(){
		echo "Add Items to Cart";
	}

	function display_content(){

		$string = file_get_contents("assets/items.json");
		$items = json_decode($string, true);

		if(isset($_POST['quantity'])){
			$index = $_GET['index']; 
			$quantity = $_POST['quantity'];

			if (isset($_SESSION ['cart'][$index])) {
				$_SESSION ['cart'][$index] += $quantity;
			} else {
				$_SESSION ['cart'][$index] = $quantity;
			}
		}

		$totalItemsPrice = 0;
		print_r($_SESSION['cart']);
		foreach ($_SESSION['cart'] as $item => $value) {
			$img = $items[$item]['img'];
			$name = $items[$item]['name'];
			$description = $items[$item]['description'];
			$price = $items[$item]['price'];
			$total = $price * $value;
			$totalItemsPrice += $total;

			echo "<div class='row'>";
			echo "<div class='col-xs-4 item_display'><form method='post' action''><img src='$img'>";
			echo "Name: <input type='text' name='name' value='$name'><br>";
			echo "Description: <textarea name='description'>$description</textarea><br>";
			echo "Price: Php <input type='number' name='price' min=0 value='$price'><br>";
			echo "The no of item you purchase is ".$value."<br>";
			echo "Total Price is ". $total."<br>";
			echo "<a href='changeQuantity.php?index=$item'><button type='button' class='btn btn-default'>Change Quantity</button></a>";
			echo "<input type='number' name='changeQuantity' min=0>";
			echo "<a href='deleteItemCart.php?index=$item'><button type='button' class='btn btn-danger'>Remove from Cart</button></a>";
			echo "</form></div></div><br>";
		}
		echo "Your total price is ".$totalItemsPrice."<br>";
		/*header('location: addItems.php');*/



		


		

	}

	require "template.php";
?>

