<?php 

session_start();

if (isset($_POST['nama'])) {
	include 'connect.php';
	
	$nama = $_POST['nama'];
	$harga = $_POST['harga'];
	$gambar = $_FILES['gambar'];

	$message = "";

		$filePath = "upload/".basename($gambar["name"]);
		move_uploaded_file($gambar["tmp_name"], $filePath);

		$connection->query("INSERT INTO makanan VALUES (null, '".$nama."' , '".$harga."' , '".$filePath."')");

		$message = "Sukses menambahkan makanan, Klik <a href='listFood.php' style='color: yellowgreen'><i>disini</i></a> untuk melihat penambahan item  <br> Klik <a href='index.php' style='color: yellowgreen;'><i>Menu</i> </a>untuk kembali menuju menu utama";

	$_SESSION['message'] = $message;

}
header("location:insert.php");
exit();

?>