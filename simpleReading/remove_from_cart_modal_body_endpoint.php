<?php


$index = $_POST['index'];

require 'connection.php';

$sql = "SELECT * FROM books WHERE inventoryID = '$index'";
					$result = mysqli_query($conn,$sql);
					while($row = mysqli_fetch_assoc($result))
					{
						$image = $row['image'];
						$bookName = $row['bookName'];
						$price = $row['price'];

						echo "<div class='row'>";
							echo "<div class='col-xs-12 item_display'>";
								echo "<img class='img-re' src='$image' style='height: 300px;'><br>";
								echo "<h5>$bookName</h5>";
								echo "Price: Php ".$price."<br>";
							echo "</div>";
						echo "</div>";
						echo "<a href='delete_from_cart.php?index=$index'><button class='btn btn-danger'>Yes</button></a>"; 
						echo "<button class='btn btn-primary' data-dismiss='modal'>No</button>";
					
					};

?>
