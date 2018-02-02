<?php 


		require 'connection.php';

		
		$description = mysqli_real_escape_string($conn,$_POST['description']);
		$price = mysqli_real_escape_string($conn,$_POST['price']);

		$index = $_GET['index'];


		$sql = "SELECT * FROM books where inventoryID = $index";
		$result = mysqli_query($conn,$sql);

		while($row = mysqli_fetch_assoc($result))
		{	

			$index = $row['inventoryID'];
			$book_id = $row['book_id'];

		/*	echo $index."<br>";
			echo $book_id;	*/		

		}


			$sql1 = "UPDATE books SET
					description ='$description',
					price = '$price',
					book_id = '$book_id'
					WHERE inventoryID ='$index'";

			mysqli_query($conn,$sql1) or die(mysqli_error($conn));
			
			header('location:adminpage.php?id=4');





?>