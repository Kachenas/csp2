<?php


function  display_title(){
	echo "CART";
}

function display_content(){

	echo "<div class='container'>";
		echo "<div class='row'>";
			echo "<div class='page-header'>";
			echo "<h3>Orders </h3>";
			echo "</div>";
		echo "</div>";	
	echo "</div>";

	if (isset($_SESSION['cart'])) 
	{
		
			require 'connection.php';
				foreach ($_SESSION['cart'] as $id => $index) 
				{
				$sql = "SELECT * FROM books WHERE inventoryID = '$id'";
				$result = mysqli_query($conn,$sql);
				$row = mysqli_fetch_assoc($result);

				$image = $row['image'];
				$bookName = $row['bookName'];
				$description = $row['description'];
				$price = $row['price'];

					
				echo "<div class='container'>";
					echo "<div class='row'>";
					echo "<div class='col-xs-12 col-sm-8 col-md-8 col-lg-8'>";
						echo "<div class=menu-styling style='width=300px, height='300px'>";
						echo "<img class='img-responsive' src='$image' style='height: 300px;'><br>";
						echo "<h4>"."Book Name: ".$bookName."</p><br>";
						echo "<p>"."Description: ".$description."</p><br>";
						echo "<p>"."Price: ".$price."</p><br>";
						echo "</div>";
					echo "</div>";
					echo "<div class='col-xs-12 col-sm-4 col-md-4 col-lg-4'>";
					echo "<button class='btn btn-danger remove_from_cart_modal_body' data-toggle='modal' data-target='#myModal' data-index='$index'>Delete</button>";
					echo "</div>";
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

					
				}
					echo "<div class='container'>";
						echo "<div class='row'>";
							echo "<a href='menu.php'>Back to Shopping</a>";		
						echo "</div>";	
					echo "</div>";

					echo "<div class='container'>";
						echo "<div class='row'>";
							echo "<div class='page-header'>";
							echo "<h3>Done Buying: Proceed to check out</h3>";
							echo "<form method='POST' action='proceed_to_checkout.php'>";
							echo "<input type='submit' class='btn btn-success' name='proceed_to_checkout' value='Proceed to Checkout'>";
							echo "</form>";
							echo "</div>";
						echo "</div>";	
					echo "</div>";
			
		}
				
		
	

	else 
	{
		if(isset($_SESSION['username'])){
			echo "<div class='container'>";
							echo "<div class='row'>";
								echo "<div class='col-xs-12 col-sm-8 col-md-8 col-lg-8'>";
								echo "Oops you do not have items on your cart.<br>";
								echo "Go to our <a href='menu.php'>MENU </a>to check for our books<br>";
								echo "</div>";
							echo "</div>";
						echo "</div>";
		}else{
		echo "<div class='container'>";
			echo "<div class='row>";
				echo "<div class='col-xs-12'>";
					echo "Oops, you are not registered.<br>";
					echo "Please register here before purchasing.<br>";
					echo "Click me to <a href='register.php'>Register<a>";
				echo "</div>";
			echo "</div>";
		echo "</div>";
		}
	}
		
	
		
} //display content end of bracket


require 'template1.php';

?>


<script type="text/javascript">
	$(".remove_from_cart_modal_body").click(function(){
		var index = $(this).data('index')
		$.ajax({
			method: 'post',
			url: 'remove_from_cart_modal_body_endpoint.php',
			data: {
				index : index
			},
			success: function(data){
				$("#modal-body").html(data);
			}
		})
	})

</script>
