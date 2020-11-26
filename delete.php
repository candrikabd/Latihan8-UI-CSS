<?php

	session_start();
	if (isset($_GET['id'])) {
		include 'connect.php';


		$connection->query("DELETE FROM makanan WHERE id = ".$_GET['id']);

	}

	header("location:listFood.php");
	exit();
?>