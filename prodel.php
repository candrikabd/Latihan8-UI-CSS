<?php 

	session_start();
	if (isset($_POST['id'])) {
		include 'connect.php';


		$connection->query("DELETE FROM makanan WHERE id = ".$_POST['id']);

	}

 ?>