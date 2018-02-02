<?php 

function display_title(){
	echo "Edit Profile";
}

function display_content(){

	
	$username = $_SESSION['username'];
	echo "<div class='container'>";
		echo "<div 'class='row'>";
			echo "<div class='page-header'>";
			echo "<h3>Hi ".ucfirst($username)."</h3>";
			echo "</div>";
		echo "</div>";
	echo "</div>";

	if (isset($_SESSION['username'])) 
	{
		echo '<div class="container">
				<div class="row">
				<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<div class="well-admin-head">';
					
				require "connection.php";

				$username = $_SESSION['username'];


				$sql = "SELECT * FROM customer WHERE username = '$username'";
				$result = mysqli_query($conn,$sql);
				while($row = mysqli_fetch_assoc($result))
				{
				$index = $row['userID'];
				$firstName = $row['firstName'];
				$lastName = $row['lastName'];
				$username = $row['username'];
				$email = $row['email'];
				$address = $row['address'];
				$contactNo = $row['contactNo'];
				
					


				echo "<h4>Name: ".$firstName." ".$lastName."</h4>";
				echo "<h4>username: </h4>".$username."<br>";
				echo "<h4>Email: </h4>".$email."<br>";
				echo "<h4>Address: </h4>" . $address."<br>";
				echo "<h4>Contact No: </h4>". $contactNo."<br>";
				
				echo "<button class='btn btn-primary updatecustomer_render_modal_body' data-toggle='modal' data-target='#myModal' data-index='$index'>Update Profile</button>";

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
					
				};
						
			echo	'</div>
				</div>
			</div>
		</div>
	';

	}


		echo "<div class='container'>";
			echo "<div 'class='row'>";
				echo "<div class='page-header'>";
				echo "<h3>Transactions</h3>";
				echo "</div>";
			echo "</div>";
		echo "</div>";

		if (isset($_SESSION['username'])) {
				
				echo "<div class='container'>";
					echo "<div 'class='row'>";

						require "connection.php";
						$totalPrice = 0;
						$price = 0;

						$username = $_SESSION['username'];

						
						$sql = "SELECT userID FROM customer WHERE username = '$username'";
								$result = mysqli_query($conn,$sql);
								while($row = mysqli_fetch_assoc($result))
								{
								$userID = $row['userID'];
								$sql1 = "SELECT purchaseID,datePurchase,price FROM orders WHERE userID = $userID";
								$result1 = mysqli_query($conn,$sql1);

									while($row = mysqli_fetch_assoc($result1))
									{
										$cartID = $row['purchaseID'];
										$datePurchase = $row['datePurchase'];
										$price = $row['price'];
									
										echo "<div class='col-xs-12 col-sm-4 col-md-4 col-lg-4'>";
										echo "Transaction ID: ".$cartID."<br>";
										echo "<hr>";
										echo "</div>";
										echo "<div class='col-xs-12 col-sm-4 col-md-4 col-lg-4'>";
										echo "Purchase on: ".$datePurchase."<br>";
										echo "<hr>";
										echo "</div>";
										echo "<div class='col-xs-12 col-sm-4 col-md-4 col-lg-4'>";
										echo "Price: ".$price."<br>";
										echo "<hr>";
										echo "</div>";
										
										$subTotal = $price;
										$totalPrice += $subTotal;
									}
										echo "<div class='container'>";
											echo "<div class='row'>";
												echo "<div class='col-xs-12'>";
													echo "<h3 style='text-align:center'>The total amount is: Php ". $totalPrice."</h3>";				
												echo "</div>";
											echo "</div>";
										echo "</div>";

								}

								/*$sql2 = "SELECT totalPrice FROM cart WHERE userID = '$userID'";
								$result2 = mysqli_query($conn,$sql2);
								while($row2 = mysqli_fetch_assoc($result2))
								{

									$totalPrice = $row2['totalPrice'];
									echo "<div class='col-xs-12 col-sm-4 col-md-4 col-lg-4'>";
										echo " ";
										echo "</div>";
										echo "<div class='col-xs-12 col-sm-4 col-md-4 col-lg-4'>";
										echo " ";
										echo " ";
										echo "</div>";
										echo "<div class='col-xs-12 col-sm-4 col-md-4 col-lg-4'>";
										echo "Total Price: ".$totalPrice."<br>";
										echo "<hr>";
										echo "</div>";

								}
*/
						
					echo "</div>";
				echo "</div>";

		}

}

require 'template1.php';


?>

<script type="text/javascript">
	$(".updatecustomer_render_modal_body").click(function(){
		var index = $(this).data('index')
		$.ajax({
			method: 'post',
			url: 'update_customerinfo_modal_body_endpoint.php',
			data: {
				edit : true,
				index : index
			},
			success: function(data){
				$("#modal-body").html(data);
			}
		})
	})

</script>
		