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
				<a class="navbar-brand" href="index.php">Simple Reading</a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="contact.php">CONTACT US</a></li>
					<li><form class="navbar-form">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search Shop">
						</div>
						<button type="submit" class="btn btn-default">Search Simple Reading</button>
					</form>
				</li>
				<li class="dropdown">
					<a href="index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
					<ul class="dropdown-menu">
						 <?php 
					      	if (isset($_SESSION['username'])) {
			 					echo '<li><a href="editprofile.php">Profile</a></li>';
			 					echo '<li><a href="logout.php">Log-Out</a></li>';
			 				} else {
			 					echo '<li><a href="login.php">Log In</a></li>';
			 					echo '<li><a href="register.php">Register</a></li>';
			 				}
					       ?>
					</ul>
				</li>
				<li><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>
	<div class="container">
		<div class="order-shop">
			<blockquote cite="https://www.goodreads.com/quotes/tag/books"> 
				<div class="quoteblack">
					<p id="blockText"> “If you only read the books that everyone else is reading, you can only think what everyone else is thinking.” </p>
					<footer>Haruki Murakami, Norwegian Wood</footer>
				</div>
			</blockquote>
		</div>
	</div>
	</header>

	