<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php display_title(); ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <script src="https://use.fontawesome.com/acc6bc0537.js"></script>
  <script src="assets/js/jquery-3.2.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>

 <link rel="stylesheet" href="assets/style.css">

 <style type="text/css">
 	img{
 		width: 100%;
 	}
 	div[class="item_display"] {
 		height: 500px;
		margin-bottom: 30px;
	}
	h5{
		font-weight: bold;
	}
 </style>
</head>
<body>

<?php require "partials/nav.php"; ?>

<div class='container'>
	<div id="content_area">
		<?php display_content(); ?>
	</div>
	
	<?php require "partials/sidebar.php"; ?>
</div>

<?php require "partials/footer.php"; ?>

</body>
</html>
