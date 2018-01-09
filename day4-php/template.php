<!DOCTYPE html>
<html>
<head>
	<!-- usage of special character -->
	<meta charset="utf-8">

	<!-- This is a mobile application -->
	<meta name="viewport" content="width=device-width", initial-scale="1.0", maximum-scale="1.0">

	<!-- Use for Internet Exploer -->
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title><?php display_title(); ?></title>

	<!-- import google fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Spectral+SC" rel="stylesheet">

	<!-- import bootstrap -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

	<!-- import jquery -->
     <script src="jquery/jquery-3.2.1.js"></script>

        <!-- import minified javascript -->
      <script src="bootstrap/js/bootstrap.min.js"></script>


	<!-- For CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php require "partials/nav.php"; ?>

	<div class="container">
		<h1>Menu Page</h1>
	</div>

	<?php require "partials/menu.php"; ?>
	<?php require "partials/footer.php"; ?>


</body>
</html>