<?php 
	session_start();

	if (!isset($_GET["id"])) {
		header("location:listFood.php");
		exit();
	}

	include 'connect.php';

	$id = $_GET["id"];

	$getData = $connection->query("SELECT * FROM makanan WHERE id = ".$id);

	if ($getData->num_rows == 0) {
		header("location:listFood.php");
	}
	$getData = $getData->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="Css/style.css">
  	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<title>Update data</title>
</head>
<body>


	<div class="Medsos">
    <div class="container">
      <ul>
          <li><a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a></li>
          <li><a href="https://instagram.com"><i class="fab fa-instagram"></i></a></li>
          <li><a href="https://api.whatsapp.com/send?phone=6285225401218&text=Hallo"><i class="fab fa-whatsapp"></i></a></li>
    </div>
  </div>

  <header>
    <div class="container">
      <h1>
        <a href="index.html">RESTAURANT</a></h1>
      <ul>
        <li><a href="index.html">HOME</a></li>
        <li><a href="about.html">ABOUT</a></li>
        <li><a href="service.html">SERVICE</a></li>
        <li><a href="contact.html">CONTACT</a></li>
        <li class="active"><a href="listFood.html">FOOD LIST</a></li>

      </ul>
    </div>
  </header>
  <section class="label">
    <div class="container">
      <p>HOME / Update Item</p>
    </div>
  </section>
  <center>
  	<fieldset style="width: 30%; background-color: white; margin-top: 100px;">
  		<h1 align="center">Update Makanan / Minuman</h1> <br>
	<form method="POST" action="prosesUpdate.php" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $_GET["id"]?>">
		
			<table style="line-height: 30px;">
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" required="required" name="nama" value="<?=$getData["nama"]?>"></td>
				</tr>
				<tr>
					<td>Harga</td>
					<td>:</td>
					<td><input type="text" required="required" name="harga" value="<?=$getData["harga"]?>"></td>
				</tr>
				<tr>
					<td>Gambar</td>
					<td>:</td>
					<td><input type="file" name="gambar"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><button>Update</button></td>
				</tr>
			</table>
	</form>
  	</fieldset>
  	</center>
	
	<center>
		<?php 

		if (isset($_SESSION['message'])) {
			echo $_SESSION['message'];
			unset($_SESSION['message']);
		}
	 ?>
	</center>
</body>
</html>