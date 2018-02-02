 <?php 


function display_title() {
	echo 'Welcome Admin';
}


function display_content() {

	echo "<br>";
	echo "<div class='container'>";
		echo "<div class='row'>";
			echo "<div class='col-xs-12 col-sm-12 col-md-12 col-lg-12'>";
				echo "<div class='btn-group btn-group-justified' role='group'>";
			  	echo "<div class='btn-group' role='group'>";
			    echo "<a href='adminpage.php?id=1'><button type='button' class='btn btn-success btn-md' name='customer'>View Customers</button></a>";
			  	echo "</div>";
			  	echo "<div class='btn-group' role='group'>";
			    echo "<a href='adminpage.php?id=2'><button type='button' class='btn btn-success btn-md' name='order'>View Orders</button></a>";
			  	echo "</div>";
			  	echo "<div class='btn-group' role='group'>";
			    echo "<a href='adminpage.php?id=3'><button type='button' class='btn btn-info btn-md' name='add-items'>Add Books</button></a>";
			  	echo "</div>";
			 	 echo "<div class='btn-group' role='group'>";
			    echo "<a href='adminpage.php?id=4'><button type='button' class='btn btn-info btn-md' name='edit-items'>Edit Books</button></a>";
			 	echo "</div>";
				echo "</div>";
			echo "</div>";
		echo "</div>";
	echo "</div>";
	echo "<br>";


	
	$id = '';

	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		if ($id == 1 ) {
			echo '<div class="container">
				<div class="row">
				<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<div class="panel panel-warning">
				<div class="panel-heading">
			    <h3 class="panel-title">Customers</h3>
			    </div>';
					
				require "connection.php";

				$sql = 'SELECT * FROM customer';
				$result = mysqli_query($conn,$sql);
				while($row = mysqli_fetch_assoc($result))
				{

				$userID = $row['userID'];
				$firstName = $row['firstName'];
				$lastName = $row['lastName'];
				$username = $row['username'];
				$password = $row['password'];
				$email = $row['email'];
				$address = $row['address'];
				$contactNo = $row['contactNo'];
				$role = $row['role'];

				echo '<div class="panel-body">';	
				echo $firstName." ".$lastName ."<br>";
				echo $username."<br>";
				echo $email."<br>";
				echo $address."<br>";
				echo $contactNo."<br>";
				/*echo "<button class='btn btn-primary update_admin_modal_body' data-toggle='modal' data-target='#myModal' data-index='$userID'>Update Profile</button>";*/
				echo '</div>';
				echo "<hr>";
					
				};
						
			echo	'</div>
				</div>
			</div>
		</div>
	';
		} 
		else if($id == 2) {

			if (isset($_SESSION['username'])) 
			{
				echo "<div class='container'>";
					echo "<div 'class='row'>";
						echo "<div class='col-xs-12 col-sm-8 col-md-8 col-lg-8'>";
							echo "<div class='panel panel-warning'>";
							echo "<div class='panel-heading'>";
    						echo "<h3 class='panel-title'>Orders</h3>";
  							echo "</div>";

						require "connection.php";

						$sql = "SELECT customer.firstName, customer.lastName, books.bookName, orders.price, orders.datePurchase 
								FROM customer
								JOIN orders ON (customer.userID=orders.userID) 
								JOIN books ON (books.inventoryID=orders.bookID)";

						$result = mysqli_query($conn,$sql);
						while($row = mysqli_fetch_assoc($result))
						{


						$firstName = $row['firstName'];
						$lastName = $row['lastName'];
						$bookName = $row['bookName'];
						$price = $row['price'];
						$datePurchase = $row['datePurchase'];
					
						echo "<div class='panel-body'>";
						echo "Ordered By: ".$firstName." ".$lastName."<br>";
						echo "Ordered On: ".$datePurchase."<br>";
						echo $bookName."<br>";
						echo $price."<br>";
						echo "<hr>";
						echo "</div>";
							
						};

						
						echo "</div>";
					echo "</div>";
				echo "</div>";


			}

		} else if($id == 3) {

			echo "<div class='container'>";
				echo "<div class='row'>";
					echo "<div class= 'col-xs-12 col-sm-8 col-md-8 col-lg-8'>";
						echo "<div class='panel panel-warning'>";
						require 'connection.php';
						echo "<div class='panel-heading'>";
						echo "<h3 class='panel-title'>Upload Books</h3>";
						echo "</div>";
						echo "<div class='panel-body'>";
						echo "<form action='add_item.php' method='post' enctype='multipart/form-data'>";
						echo "<div class='form-group'>"; 
						echo "<label for='fileupload'> Select image to upload</label>";
						echo "<input type='file' name='fileupload' value='fileupload' id='fileupload'>";
						echo "</div>";
						echo "<div class='form-group'>"; 
						echo "Bookname: <input type='text' name='bookName'>";
						echo "</div>";
						echo "<div class='form-group'>"; 
						echo "Description: <input type='text' name='description'>";
						echo "</div>";
						echo "<div class='form-group'>"; 
						echo "Price: <input type='text' name='price'><br>";
						echo "</div>";
						echo "<div class='form-group'>"; 
						echo "Author Name:";
						echo "<select name='author_choose'>";
						echo	"<option value='1'>Paulo Coelho</option>";
						echo 	"<option value='2'>Mitch Albom</option>";
						echo 	"<option value='3'>Nicholas Sparks</option>";
						echo 	"</select>";
						echo "<br>";
						echo "</div>";
						echo "<input type='submit' class='btn btn-success' value='Save'>";
						echo "</form>";
						echo "</div>";
						echo "</div>";
					echo "</div>";
				echo "</div>";
			echo "</div>";

			
		} 
						

		else if($id == 4) {

	
	require 'connection.php'; 

	$sql = "SELECT * FROM books";
	$result = mysqli_query($conn,$sql);

			
				while($row = mysqli_fetch_assoc($result))
				{
						echo "<div class='container'>";
						echo "<div class='row'>";
						echo "<div class= 'col-xs-12 col-sm-8 col-md-8 col-lg-8'>";
						echo "<div class='panel panel-warning'>";
						require 'connection.php';
						echo "<div class='panel-heading'>";
						echo "<h3 class='panel-title'>Edit Books</h3>";
						echo "</div>";
						echo "<div class='panel-body'>";
						
						$index = $row['inventoryID'];
						$image = $row['image'];
						$bookName = $row['bookName'];
						$description = $row['description'];
						$price = $row['price'];
					
						
								
						echo "<img class='img-responsive' src='$image' style='height: 300px; width:200px;'><br>";
						echo "<h4>"."Book Name: ".$bookName."</p><br>";
						echo "<p>"."Description: ".$description."</p><br>";
						echo "<p>"."Price: ".$price."</p><br>";


										
						echo "<button class='btn btn-primary render_modal_body' data-toggle='modal' data-target='#myModal' data-index='$index'>Update</button>";
						echo "<button class='btn btn-danger delete_modal_body' data-toggle='modal' data-target='#myModal' data-index='$index'>Delete</button>";
						echo "</div>";
						echo "</div>";
						echo "</div>";
						echo "</div>";
						echo "</div>";
										
				}


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


		} /*bracket for add items*/
		
	} /*Main brakect*/


				
	



}



require 'template1.php';




?>

<script type="text/javascript">
	$("#add_item").click(function(){
		$.ajax({
			method: 'post',
			url: 'render_modal_body_endpoint.php',
			data: {
				add : true,
			},
			success: function(data){
				// alert(data)
				$("#modal-body").html(data);
				$("#myModal").modal('show');
			}
		})
	})
	/*________________________________________________________*/

	$(".update_admin_modal_body").click(function(){
		var index = $(this).data('index')
		$.ajax({
			method: 'post',
			url: 'update_admin_modal_body_endpoint.php',
			data: {
				edit : true,
				index : index
			},
			success: function(data){
				$("#modal-body").html(data);
			}
		})
	})

	/*________________________________________________________*/

	$(".render_modal_body").click(function(){
		var index = $(this).data('index')
		$.ajax({
			method: 'post',
			url: 'render_modal_body_endpoint.php',
			data: {
				edit : true,
				index : index
			},
			success: function(data){
				$("#modal-body").html(data);
			}
		})
	})

	/*____________________________________________________________*/

	$(".delete_modal_body").click(function(){
		var index = $(this).data('index')
		$.ajax({
			method: 'post',
			url: 'delete_modal_body_endpoint.php',
			data: {
				index : index
			},
			success: function(data){
				$("#modal-body").html(data);
			}
		})
	})

	/*-------------------------------------------------------------*/

	
</script>