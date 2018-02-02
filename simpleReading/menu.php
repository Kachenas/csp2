<?php

function display_title(){
	echo "Menu Page";
}

function display_content(){


	echo '<div class="container">
			<div class="page-header">
				<h1>Collections</h1>
			</div>
		</div>';

	echo "<div class='container'>";	
		echo "<div class='row'>";
	
	require 'connection.php'; 

	$sql = "SELECT * FROM books";
	$result = mysqli_query($conn,$sql);

				while($row = mysqli_fetch_assoc($result))
				{
					
					$index = $row['inventoryID'];
					echo "<div class='col-xs-12 col-sm-4 col-md-4'>";
					$image = $row['image'];
					echo "<div class='col-xs-12 col-sm-8 col-md-8'>";
					$bookName = $row['bookName'];
					$description = $row['description'];
					$price = $row['price']; ?>
					<div class=menu-styling> <?php
					echo "<img class='img-re' src='$image' style='height: 300px;'><br>";
					echo "<h4>"."Book Name: ".$bookName."</p><br>";
					echo "<p>"."Description: ".$description."</p><br>";
					echo "<p>"."Price: ".$price."</p><br>";
					if(isset($_SESSION['username']) && $_SESSION['role'] == 'admin')
					{
						echo "<button class='btn btn-primary render_modal_body' data-toggle='modal' data-target='#myModal' data-index='$index'>Update</button>";
						echo "<button class='btn btn-danger delete_modal_body' data-toggle='modal' data-target='#myModal' data-index='$index'>Delete</button>";
					}
					else if(isset($_SESSION['username']))
					{
						echo "<form method='POST' action='add_to_cart.php?index=$index'>";
						echo "<button class='btn btn-success'>Add to Cart</button>";
						echo "</form>";

					}
					echo "</div>";
					echo "</div>";
					echo "</div>";
				}
	
			echo "</div>";
		echo "</div>";


		echo '<div id="myModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title">Simple Reading</h4>
				      </div>
				      <div class="modal-body" id="modal-body">
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div>

				  </div>
			</div>';
	

} /*for display_content end bracket */



require 'template1.php';


?>


