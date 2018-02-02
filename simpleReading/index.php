<?php

function display_title(){
	echo "Welcome to Simple Reading";
}

function display_content(){

	echo "<div class='container'>";	
		echo "<div class='row'>";
	
	require 'connection.php'; 

	$sql = "SELECT * FROM books";
	$result = mysqli_query($conn,$sql);

				while($row = mysqli_fetch_assoc($result))

				{
					
					echo "<div class='col-xs-12 col-sm-4 col-md-4'>";
					echo "<div class='menu-index-styling'>";
					$index = $row['inventoryID'];
					$image = $row['image'];
					$bookName = $row['bookName'];
					$description = $row['description'];
					$price = $row['price'];

					echo "<img class='img-re' src='$image' style='height: 300px;'><br>";
					echo "<h4>"."Book Name: ".$bookName."</p><br>";
					echo "<p>"."Description: ".$description."</p><br>";
					echo "<p>"."Price: ".$price."</p><br>";
					if(isset($_SESSION['username']) && $_SESSION['role'] == 'admin')
					{
						header('location: menu.php');
					}
					else if(isset($_SESSION['username']))
					{
						echo "<form method='POST' action='add_to_cart.php?index=$index'>";
							/*echo "<input type='number' name='quantity' min=0>";*/
							echo "<button class='btn btn-success'>Add to Cart</button>";
						echo "</form>";
					}
					echo "</div>";
					echo "</div>";
				}
	
					echo "</div>";
					echo "</div>";
}

require 'template.php';


?>




