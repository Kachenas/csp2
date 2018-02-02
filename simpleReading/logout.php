<?php
function display_title() {
	echo "Log Out";
}

function display_content(){
		
		header('location: index.php');
		session_destroy();
}

require "template1.php"; ?>




