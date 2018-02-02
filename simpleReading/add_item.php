<?php
		require 'connection.php';



			$bookName = $_POST['bookName'];
			$description = $_POST['description'];
			$price = $_POST['price'];
			$author_choose = $_POST['author_choose'];


			$target_dir = "assets/images/";
			$target_file = $target_dir . basename($_FILES["fileupload"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file);

			echo $image = $target_file."<br>";
			echo $author_choose."<br>";
			echo  $bookName."<br>";
			echo  $description."<br>";
			echo  $price."<br>";
			
			$bookName = mysqli_real_escape_string($conn,$_POST['bookName']);
			$image = $target_file;
			$description = mysqli_real_escape_string($conn,$_POST['description']);
			$price = mysqli_real_escape_string($conn,$_POST['price']);
			

			

			$sql = "INSERT INTO books (bookName,image,description,price,book_id) VALUES ('$bookName','$image','$description','$price','$author_choose')";
			mysqli_query($conn,$sql);

			header('location: adminpage.php?id=4');
			

?>