<?php

	function add_to_sum($num)
	{

		$sum = 0;
		for ($x=0;$x<=$num;$x++)
		{

		$sum += $x;
		
		}
	echo "<h1>The sum is: $sum</h1>";

	}

	function twelve_days_xmas () {

		$gifts = array 
	(
		"A partridge in a pear tree",
		"Two turtle doves",
		"Three french hens",
		"Four colly birds",
		"Five gold rings",
		"Six geese a-laying",
		"Seven swans a-swimming",
		"Eight maids a-milking",
		"Nine ladies dancing",
		"Ten lords a-leaping",
		"Eleven pipers piping",
		"Twelve drummers drumming"
	);

	$days = array 
	("First",
	"Second",
	"Third",
	"Fourth",
	"Fifth",
	"Sixth",
	"Seventh",
	"Eighth",
	"Nineth",
	"Tenth",
	"Eleventh",
	"Twelveth");

	function getTitle() 
	{
		return "<h1>12 Days of Christmas</h1>";
	}	


	echo getTitle();


	
	$count_no_gifts = count($gifts);

	// This will loop the # of Days and out put it.
	for($x = 0;$x < count($days); $x++ )
	{
		echo "On the ".$days[$x]." day of Christmas my true love sent to me, <br>"; 
		for ($y = $x;$y >= 0; $y--)
		{
			if ($y==0 && $x!=0){
				echo " and ";
			}
			echo strtolower($gifts[$y]);
			if ($y!=0){
				echo ",";
			}else {
				echo ".";
			}
			
		}
		echo "<hr>";
	}
	

	}

	function dayOne()
	{
		echo "On the First day of Christmas my true love sent to me, a partridge in a pear tree.";
	}

	/*
	<?php
		if(isset($_POST['counter1']) && $_POST['counter']!=11
		{
			$counter = ++$_POST['counter'];
		}else 
		{
			$counter = 0;
		}


	?>
	*/
	
	


?>