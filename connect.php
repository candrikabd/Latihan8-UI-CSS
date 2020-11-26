<?php 
	$connection = new mysqli(
		"localhost",
		"root",
		"",
		"restoran");
	if (!$connection) {
		echo "Connection error";
		exit();
	}
 ?>