<!DOCTYPE html>
<html>
<head>
	<title>Adding Input to Array</title>
</head>
<body>

	<h1><?php echo "PHP Day 1"; ?></h1>
	<?php 
	
	$phrase = "The quick brown fox jump over the lazy dog";

	$num = strlen($phrase);
	/*echo "$phrase[$x]";*/

	//for changing lowercase to upper and upper to lower
	/*for ($x = 0; $x < $num; $x++){
		
		if ($x%2 == 0 ) {
			echo strtolower($phrase[$x]);
		}else
			echo strtoupper($phrase[$x]);
	}
*/
	/*echo "<table border=\"1\" style='border-collapse:collapse'>"
	for ($x = 1; $x <= 12; $x++) {
		echo "<tr> \n";
		for ($y = 1; $y <=12; $y++) 
		{
		$p = $x*$y;
		echo "<td> $p </td> \n";
		
		}
		echo "</table>";
		
	}
*/
	/*for ($x = 2; $x <=12; $x++) {
		echo " <br>$x";
		
	}*/




	?>

	<!--  multiplication table -->
	<table border="1">
		<?php
			echo "<tr>";
			for ($x = 0; $x <=12; $x++) {
				echo "<th>$x</th>";
			}
			for ($x = 1; $x <=12; $x++) {
				echo "<tr><th>$x</th>";
				for ($y = 1; $y <=12; $y++){
					echo "<td>".$x*$y."</td>";
				}
				echo "</tr>";
			}
		?>

	</table>

	<!-- output -->
	<h1>Output from 0 to 10</h1>
	<?php
	$num= 10;
	$sum = 0;
	for ($x=0;$x<=$num;$x++){

		$sum += $x;
		
	}
	echo "<h1>$sum</h1>";

	?>

	<br>

	<!-- factorial -->

	<?php
	$num= 10;
	$factorial = 1;
	for ($x=1;$x<=$num;$x++){

		$factorial *= $x;
		
	}
	echo "<br>";
	echo "<h1>$factorial</h1>";
	?>

	<!-- implementing function -->

	<?php

		function print_2_by_3_table() 
		{
			echo "<table border='1'>";
			for ($x=0;$x<2;$x++)
				echo "<tr>";
			{
				for ($y=0;$y<3;$y++)
				{
					echo "<td>(content)</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		}

		print_2_by_3_table();
	?>

	<h1>User Input</h1>

	<?php

		function print_table($row,$column) 
		{
			echo "<table border='1'>";
			for ($x=0;$x<$row;$x++)
				echo "<tr>";
			{
				for ($y=0;$y<$column;$y++)
				{
					echo "<td>(content)</td>";
				}
				echo "</tr>";
			}
			echo "</table>";
		}

		print_table(4,3);
	?>

	<h1>Converting to function</h1>

	<!-- convert to function -->
	

	add_to_sum(10);


	?>

	
	<?php
		function mul_to_prod($num1)
		{

			$factorial = 1;
			for ($x=1;$x<=$num1;$x++){

				
				$factorial *= $x;
			}
			echo "<h1>The factorial is $factorial</h1>";
		}

		mul_to_prod(6);
	?>

	<?php

	$fname = 'ChEsTeR';
	$mname = 'SoRiAnO';
	$lname = 'AlMoNtE';

	function fix_names($n1,$n2,$n3){
		$n1 = ucfirst(strtolower($n1));
		$n2 = ucfirst(strtolower($n2));
		$n3 = ucfirst(strtolower($n3));

		return array($n1,$n2,$n3);

	}


	$names = fix_names($fname,$mname,$lname);

	echo $names [0] . " " . $names [1] . " " . $names [2];


	
	?>

	<br>	

	<?php

	$word1 = "Hello";
	$word2 = "World";
	$word3 = "Tuitt";

	function sample_function($word1,$word2){
		
		global $word1;
		global $word2;
		$word1 = ucfirst($word1);
		$word2 = ucfirst($word2);
		$word3 = "TUITT";
		return $word1 . " " . $word2;
	}

	echo sample_function($word1,$word2);
	echo "<br> $word3";

	echo "<br>";

	echo "request method: ".$_SERVER['REQUEST_METHOD']."<br> request uri:".$_SERVER['REQUEST_URI'];

	?>

	<?php
	include "library.php";
	
	?>





</body>
</html>

<!-- /*$name = ["Chester","Jude","Justin","Vilfa"];
	$inputName = 'Hello';

	

	for ($x = 0; $x < count($name);$x++){
		echo "$name[$x]";*/ -->