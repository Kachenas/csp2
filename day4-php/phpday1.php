<!DOCTYPE html>
<html>
<head>
	<title>Day 1 PHP</title>
</head>
<body>


<h1><?php echo "PHP DAY 1";?></h1>

<?php 

$name = 'Chester';
$last = 'Almonte';

echo "My name is $name " . "$last";
echo "<br>";

echo 'my name is $name';

/*define("name","value");
define("ROOt_LOCATION","usr/local/www");*/

echo "<br>";

// difference of ++num and num++
 $num = 0;
 echo ++$num;
 echo "<br>";
 echo $num;

 echo "<br>";

 echo $num++;
 echo "<br>";
 echo $num;


 echo "<br>";

 $a = true && false;

 if ($a) {
 	echo 'TRUE';
 } else {
 	echo 'FALSE';
 }

 echo "<br>";

 $phrase = 'The quick brown fox jump over the lazy dog';
 echo ucwords($phrase);
 echo "<br>";
 echo ucfirst($phrase);
 
echo "<br>";
$phrase2 = "Chester";

echo ++$phrase2;

echo "<br>";


echo stripos($phrase, "quick");

echo substr($phrase, 4);

echo "<br>";

echo substr($phrase, 4, 5 );

echo "<br>";


$pos = stripos($phrase,"fox");
echo substr($phrase, $pos);

$phrase3 = 'Hello World';
// returns number of character
echo strlen($phrase3);

echo "<br>";
//array
$input = 'Grey';
$colors = ["red","green","violet","blue","white","pink"];
$num = count($colors);
echo "<ul>";



for ($x=0; $x < $num; $x++) { 
	echo "<li>$colors[$x]</li>";
}
echo "</ul>";

?>






</body>
</html>