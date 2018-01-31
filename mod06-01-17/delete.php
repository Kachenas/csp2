<?php 
//retrieve items to be delted
$index = $_GET['index'];

//load json file
$string = file_get_contents('assets/items.json');
$items = json_decode($string,true);

//delete task from array $todos


/*array_splice($items,$index,1);*/

unset($items[$index]);

//update json file
$file = fopen('assets/items.json', 'w');
fwrite($file, json_encode($items, JSON_PRETTY_PRINT));
fclose($file);

header('location: menu.php');


 ?>