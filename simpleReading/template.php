<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<!-- usage of special character -->
	<meta charset="utf-8">

	<!-- This is a mobile application -->
	<meta name="viewport" content="width=device-width", initial-scale="1.0", maximum-scale="1.0">

	<!-- Use for Internet Exploer -->
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title>Simple Reading</title>

	<!-- import google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Open+Sans+Condensed:300|Poiret+One|Tangerine|Vidaloka" rel="stylesheet">

	<!-- import bootstrap -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

	<!-- import jquery -->
    <script src="bootstrap/js/jquery-3.2.1.min.js"></script>

    <!-- import minified javascript -->
   	<script src="bootstrap/js/bootstrap.min.js"></script>

   	<!-- import own javascript -->
   	<script src="bootstrap/js/myfunction.js"></script>

   	<!-- Font Awesome -->
	<script src="https://use.fontawesome.com/acc6bc0537.js"></script>

	<!-- For CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<header class="jumbotron">
		<nav class="navbar navbar-default">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#"><img class="img-responsive-icon" src="assets/images/icon2.png" alt="Logo">Simple Reading</a>
	    </div>
	     <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav navbar-right">
	      	<li><a href="about.php">ABOUT US</a></li>
	      	<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Authors<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="author.php">Paulo Coelho</a></li>
	            <li><a href="author.php">Nicholas Sparks</a></li>
	            <li><a href="author.php">Mitch Albom</a></li>
	          </ul>
	        </li>
	      	<li><form class="navbar-form">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search Shop">
		        </div>
		        <button type="submit" class="btn btn-default">Search Books</button>
	      	</form>
	      </li>
	      	<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
	          <ul class="dropdown-menu">
	            <li><button class='btn btn-primary render_modal_body' data-toggle='modal' data-target='#myModal' data-index='$index'>Log In</button></li>
	            <li><button class='btn btn-primary render_modal_body' data-toggle='modal' data-target='#myModal' data-index='$index'>Register</button></li>
	          </ul>
	        </li>
	          <li><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart</a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	</nav>
	<div class="container-fluid">
		<div class="container">
		<div class="order-shop">
			<blockquote cite="https://www.goodreads.com/quotes/tag/books"> 
				<p> “If you only read the books that everyone else is reading, you can only think what everyone else is thinking.” </p>
				<footer>Haruki Murakami, Norwegian Wood</footer>
			</blockquote>
		</div>
	</div>
	</header>
	<!--Start of Menu  -->
	<div class="container">
		<div class="row">
			<div class="page-header">
				<h1>Books Made by Author</h1>
			</div>
		</div>	
	</div>
	<div class="container">
	  <div class="row">
	  	<div class="col-xs-12 col-sm-4 col-md-4">
	  		<h4>Paulo Coelho</h4>
				  <div id="myCarousel" class="carousel slide" data-ride="carousel">
			    		<!-- Wrapper for slides -->
					    <div class="for-carousel-slide">
						    <div class="carousel-inner">
						      <div class="item active">
						        <img class="img-responsive" src="assets/images/paulo/alchemist.jpg" alt="The Alchemist" style="height: 200px;">  
						      </div>

						      <div class="item">
						        <img  src="assets/images/paulo/aleph.jpg" alt="Aleph" style="height: 200px;">
						      </div>
						    
						      <div class="item">
						        <img  src="assets/images/paulo/brida.jpg" alt="Brida" style="height: 200px;"> 
						      </div>

						      <div class="item">
						        <img src="assets/images/paulo/bytheriver.jpg" alt="bytheriver" style="height: 200px;">
						      </div>
						      <div class="item">
						        <img src="assets/images/paulo/eleven.jpg" alt="Eleven Minutes" style="height: 200px;">
						      </div>
						    </div>
					    </div>

					    <!-- Left and right controls -->
					    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
					      <!-- <span class="glyphicon glyphicon-chevron-left"></span>
					      <span class="sr-only">Previous</span> -->
					    </a>
					    <a class="right carousel-control" href="#myCarousel" data-slide="next">
					      <!-- <span class="glyphicon glyphicon-chevron-right"></span>
					      <span class="sr-only">Next</span> -->
					    </a>
					</div>	
	  	</div>
	  	<div class="col-xs-12 col-sm-4 col-md-4">
	  			<h4>Nicholas Sparks</h4>
				  <div id="myCarousel1" class="carousel slide" data-ride="carousel">
			    		<!-- Wrapper for slides -->
					    <div class="for-carousel-slide">
						    <div class="carousel-inner">
						      <div class="item active">
						        <img class="img-responsive" src="assets/images/nicholas/Awalk.jpg" alt="A walk to remember" style="height: 200px;">  
						      </div>

						      <div class="item">
						        <img  src="assets/images/nicholas/Notebook.jpg" alt="The Notebook" style="height: 200px;">
						      </div>
						    
						      <div class="item">
						        <img  src="assets/images/nicholas/DearJohn.jpg" alt="Dear John" style="height: 200px;"> 
						      </div>

						      <div class="item">
						        <img src="assets/images/nicholas/firstsight.jpg" alt="At First Sight" style="height: 200px;">
						      </div>
						    </div>
					    </div>

					    <!-- Left and right controls -->
					    <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
					      <!-- <span class="glyphicon glyphicon-chevron-left"></span>
					      <span class="sr-only">Previous</span> -->
					    </a>
					    <a class="right carousel-control" href="#myCarousel1" data-slide="next">
					      <!-- <span class="glyphicon glyphicon-chevron-right"></span>
					      <span class="sr-only">Next</span> -->
					    </a>
					</div>	
	  	</div>
	  
	  	<div class="col-xs-12 col-sm-4 col-md-4">
	  			<h4>Mitch Albom</h4>
				  <div id="myCarousel2" class="carousel slide" data-ride="carousel">
			    		<!-- Wrapper for slides -->
					    <div class="for-carousel-slide">
						    <div class="carousel-inner">
						      <div class="item active">
						        <img class="img-responsive" src="assets/images/mitch/tuesdays.jpg" alt="Tuesdays with Morrie" style="height: 200px;">  
						      </div>

						      <div class="item">
						        <img  src="assets/images/mitch/FivePeople.jpg" alt="Five People You Meet in Heaven" style="height: 200px;">
						      </div>
						    
						      <div class="item">
						        <img  src="assets/images/mitch/MagicStrings.jpg" alt="Magic Strings" style="height: 200px;"> 
						      </div>

						      <div class="item">
						        <img src="assets/images/mitch/onemoreday.jpg" alt="One More Day" style="height: 200px;">
						      </div>
						    </div>
					    </div>

					    <!-- Left and right controls -->
					    <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
					      <!-- <span class="glyphicon glyphicon-chevron-left"></span>
					      <span class="sr-only">Previous</span> -->
					    </a>
					    <a class="right carousel-control" href="#myCarousel2" data-slide="next">
					      <!-- <span class="glyphicon glyphicon-chevron-right"></span>
					      <span class="sr-only">Next</span> -->
					    </a>
					</div>	
	  	</div>
	  </div>
	</div>


	<!-- Start of Newsletter -->
	<div class="jumbotron-newsletter">
		<div class="container">
			<h4>Join our Monthly News Letter!</h4><br>
			<p>Want to stay updated about the latest discounts and flash sales? Just type your email address and will send you the latest update straight to your inbox!</p><br>
			<input type="email" name="newsLetter" placeholder="Enter Email">
			<button type="button" name="connectWithUs" id="connectWithUs">Connect with Us</button>
		</div>
	</div>
	</div>

	<!-- Iterate Items -->
	<div class="jumbotron-">
		<div class="container">
			<div class="menu-cart col-xs-12 col-sm-4 col-md-4">
				<img src="assets/images/mitch/onemoreday.jpg" alt="One More Day" style="height: 200px;">
			</div>
			<div class="menu-cart col-xs-12 col-sm-8 col-md-8">
				<?php

				require 'connection.php';

				while($row = mysqli_fetch_assoc($result))
				{
					$image = $row['image'];
					$bookName = $row['bookName'];
					$description = $row['description'];
					$price = $row['price'];

					echo "<img class='col-xs-3' src='$image'>";
					echo $bookName;
					echo $description;
					echo $price;
					echo "<br>";
				}


				?>
			</div>
		</div>
	</div>
	
	<!-- Start of Footer -->
	<div class="container">
		    <footer>
				<div class="row">
					<div class="col-xs-12 col-sm-4 col-lg-4">
						<ul>
					    	<li><h4>Links</h4></li>
					    	<li><a href="">About</a></li>
					    	<li><a href="">Shop</a></li>
					    	<li><a href="">Cart</a></li>
					    </ul>
					</div>
					<div class="col-xs-12 col-sm-4 col-lg-4">
						<ul>
					    	<li><h4>Contact us:</h4></li>
					    	<li><a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i>Facebook</a></li>
					    	<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</a></li>
					    	<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>Instagram</a></li>
					    	<li><a href="#"><i class="fa fa-pinterest-square" aria-hidden="true"></i>Pinterest</a></li>
					    </ul>
					</div>
					<div class="col-xs-12 col-sm-4 col-lg-4">
						<ul>
					    	<li><h4>Delivery Info</h4></li>
					    	<li>Monday to Friday</li>
					    	<li>8 AM to 5PM</li>
					    	<li>Saturday</li>
					    	<li>9PM to 6PM</li>
					    	<li>Terms and Condition</li>
					    </ul>
					</div>
				</div>	
		    </footer>
	  	</div>
	 </div>
	  <div class="container">
		    	<div class="row">
		    		<p id="forFooter">&copy2018 www.suedeshoes.com. All rights reserved/ <span><a href="#">Disclaimer</a></span></p>
		    	</div>
	</div>

	

	
	<!-- Start of script -->

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
	</script>
</body>
</html>