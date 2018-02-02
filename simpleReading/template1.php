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
		if (isset($_SESSION['username']) && $_SESSION['username'] == 'admin') {
			require 'partials/nav2.php';
		}else {	
			require 'partials/nav1.php'; 
		}
		?>

		<div id="content-area">
			<?php display_content(); ?>
		</div>

		<?php
		require 'partials/footer.php'; 
		?>

		<!-- import own javascript -->
   		<script src="bootstrap/js/myfunction.js"></script>
	</body>
</html>