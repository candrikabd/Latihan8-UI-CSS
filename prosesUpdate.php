<?php 

session_start();

if (isset($_POST['nama'])) {
	include 'connect.php';
	
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$harga = $_POST['harga'];
	$gambar = $_FILES['gambar'];

	$message = "";

		if (isset($gambar['tmp_name']) && $gambar['tmp_name'] !=""){
			$filePath = "upload/".basename($gambar["name"]);
			move_uploaded_file($gambar["tmp_name"], $filePath);

			$connection->query("UPDATE makanan SET gambar = '".$filePath."' WHERE id = ".$id);
		}

		$connection->query("UPDATE makanan SET nama = '".$nama."', harga = '".$harga."' WHERE id = ".$id);

		$message = "Sukses mengedit menu makanan, Klik <a href='listFood.php' style='color: yellowgreen;'><i>disini</i></a> untuk melihat perubahan <br> Klik <a href='index.php' style='color:yellowgreen;'><i> Menu</i> </a>untuk kembali menuju menu utama";


	$_SESSION['message'] = $message;
	header("location:update.php?id=".$id);
	exit();

}
header("location:insert.php");
exit();

?>