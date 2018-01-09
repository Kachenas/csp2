<!DOCTYPE html>
<html>
<head>
	<title>Calling FUnction</title>

	<!-- For CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<?php

	require "function_library.php";
	
	?>
	

	<div class="wrapper">
		<?php
		echo twelve_days_xmas();
		?>
		<button id="changeColor" onclick="changeName(this.innerHTML)" >Day1
	</div>

	<div class="wrapper">
		<?php
		echo getTitle();
		?>
		<button id="changeColor" onclick="changeName(this.innerHTML)" >Day1
	</div>




	<script type="text/javascript">

		function changeColor() {

			alert('Nakakahilo Men');
		}

	</script>


</body>
</html>



