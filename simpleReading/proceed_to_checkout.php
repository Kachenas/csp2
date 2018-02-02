<?php 

function display_title() {
	echo "Check Out";
}

function display_content(){
		
	

	echo "<div class='container'>"; 
	echo "<div class='row'>"; 
	echo "<div class='col-xs-12 col-sm-8 col-md-8'>"; 
	echo "<div class='panel panel-warning'>"; 
	echo "<div class='panel-heading'>"; 
	echo "<h3 class='panel-title'>Here are your Orders</h3>";
	echo "</div>"; 
	if (isset($_SESSION['cart'])) 
	{
			
				require 'connection.php';
				$totalPrice = 0;
				$price = 0;
				foreach ($_SESSION['cart'] as $id => $index) 
				{

				$sql = "SELECT * FROM books WHERE inventoryID = '$id'";
				$result = mysqli_query($conn,$sql);
				$row = mysqli_fetch_assoc($result);
				
				$bookName = $row['bookName'];
				$price = $row['price'];

				
				echo "<div class='panel-body'>";
				echo "<h4>"."Book Name: ".$bookName."</p><br>";
				echo "<p>"."Price: ".$price."</p><br>";

									
	
				$subTotal = $price;
				$totalPrice += $subTotal;

				echo "</div>";
					
				}

				echo "<div class='container'>";
					echo "<div class='row'>";
						echo "<div class='col-xs-12 col-sm-8 col-md-8'>";
							echo "<h3>The total amount is: ". $totalPrice."</h3>";				
						echo "</div>";
					echo "</div>";
				echo "</div>";

		
	
	echo "</div>"; 
	echo "</div>"; 
	echo "</div>"; 
	echo "</div>"; 
		
				
	}

	if (isset($_SESSION['username'])) {

		$username = $_SESSION['username'];	

		$sql = "SELECT * FROM customer WHERE username = '$username'";
		$result = mysqli_query($conn,$sql);

				while($row = mysqli_fetch_assoc($result))
				{
					
					$index = $row['userID'];
					echo "<div class='container'>";
					echo "<div class='row'>";
					echo "<div class='col-xs-12 col-sm-8 col-md-8'>"; //class
					$firstName = $row['firstName'];
					$lastName = $row['lastName'];
					$email = $row['email'];
					$address = $row['address'];

					echo "<div class='panel panel-success'>"; 
					echo "<div class='panel-heading'>"; 
					echo "<h3 class='panel-title'>User Details</h3>";
					echo "</div>";
					echo "<div class='panel-body'>"; 
					echo "<div class=menu-styling>"; //menu styling
					echo "<h4>"."Full Name: ".$firstName."".$lastName."<br>";
					echo "Email: ".$email."<br>";
					echo "Address: ".$address."<br>";
					echo "</div>"; //menu styling
					echo "</div>";
					echo "</div>"; //class
					echo "</div>";
					echo "</div>";

					$_SESSION[$firstName] = $firstName;
					$_SESSION[$lastName] = $lastName;
					$_SESSION[$email] = $email;
					$_SESSION[$address] = $address;
				}
				

				echo "<div class='container'>";
					echo "<div class='row'>";
						echo "<div class='page-header'>";
						echo "<form method='POST' action='confirm_checkout.php?index=$index'>";
						echo "<input type='hidden' name='totalPrice' value=$totalPrice>";
						echo "<input type='submit' class='btn btn-success' name='confirm_checkout' value='Confirm CheckOut'>";
						echo "</form>";
						echo "</div>";
					echo "</div>";	
				echo "</div>";
	}
	else 
	{
		echo "username cannot be read";
	}

	

			



}


require 'template1.php';
 ?>