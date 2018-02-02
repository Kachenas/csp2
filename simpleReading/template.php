<?php session_start() ?>
<!DOCTYPE html>
<html>
	<head>
		<?php 
		require 'partials/topImport.php';
		?>
	</head>
	<body>
		<?php
		require 'partials/nav.php';
		require 'partials/menu.php';
		display_content();
		require 'partials/footer.php'; 
		?>

		<!-- import own javascript -->
   	<script src="bootstrap/js/myfunction.js"></script>
	</body>
</html>