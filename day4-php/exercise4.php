<!DOCTYPE html>
<html>
<head>
	<!-- usage of special character -->
	<meta charset="utf-8">

	<!-- This is a mobile application -->
	<meta name="viewport" content="width=device-width", initial-scale="1.0", maximum-scale="1.0">

	<!-- Use for Internet Exploer -->
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">

	<title>Incorporating Bootstrap to php</title>

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

	<?php

	$ages = [
		'Chester' => 45,
		'Ben' => 16,
		'Joe' => 37];


		foreach ($ages as $name => $age2) {
			echo "The age of " . $name . " is " . $age2 . "<br>";
		}

		echo "<br>";

		foreach ($ages as $age2) {
			echo "$age2 <br>";	
		}

		echo "<br>";

		$item1 = [
		'Name' => 'Book 1',
		'Description' => 'Horror',
		'Price' => 1,
		'Image' => 'image1',
		'Category' => 'passA'];

		foreach ($item1 as $a => $b) {
			echo $a . " " . $b . "<br>"; 
		}

		echo "<br>";

		$item2 = [
		'Name' => 'Book 2',
		'Description' => 'Comedy',
		'Price' => 2,
		'Image' => 'image2',
		'Category' => 'passB'];

		echo "<br>";

		foreach ($item2 as $a => $b) {
			echo $a . " " . $b . "<br>"; 
		}

		$item3 = [
		'Name' => 'Book 3',
		'Description' => 'Romance',
		'Price' => 3,
		'Image' => 'image3',
		'Category' => 'passC'];

		echo "<br>";

		foreach ($item3 as $a => $b) {
			echo $a . " " . $b . "<br>"; 
		}
	
		$item4 = [
		'Name' => 'Book ',
		'Description' => 'Action',
		'Price' => 4,
		'Image' => 'image4',
		'Category' => 'passD'];

		echo "<br>";

		foreach ($item4 as $a => $b) {
			echo $a . " " . $b . "<br>"; 
		}

		$item5 = [
		'Name' => 'Book 5',
		'Description' => 'SciFi',
		'Price' => 5,
		'Image' => 'image5',
		'Category' => 'passE'];

		echo "<br>";

		foreach ($item5 as $a => $b) {
			echo $a . " " . $b . "<br>"; 
		}

		$item6 = [
		'Name' => 'Book 6',
		'Description' => 'Thriller',
		'Price' => 6,
		'Image' => 'image6',
		'Category' => 'passF'];

		echo "<br>";

		foreach ($item6 as $a => $b) {
			echo $a . " " . $b . "<br>"; 
		}

		echo "<br>";

		$items = [
		$item1,
		$item2,
		$item3,
		$item4,
		$item5,
		$item6];

		/*looping simplified*/

		foreach ($items as $item) {
			foreach ($item as $key => $value) {
				echo "$key: $value <br>";
			}
		}

		foreach ($items as $item) {
			echo "Name: ".$item['Name']."<br>";
			echo "Description: ".$item['Description']."<br>";
			echo "<img src= ' " .$item['Image']."'>";
			echo "<hr>";
		}



	?>

		

	<!--  require "partials/menu.php";  -->

	<?php require "partials/footer.php"; ?>

	

</body>
</html>