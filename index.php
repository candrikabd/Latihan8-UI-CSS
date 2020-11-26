<!DOCTYPE html>
<html>
<head>
	<title>CRUD Data</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="Css/style.css">
  	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
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
        <li><a href="listFood.php">FOOD LIST</a></li>
        <li class="active"><a href="index.php">MENU UTAMA</a></li>

      </ul>
    </div>
  </header>

  <section class="label">
    <div class="container">
      <p>HOME / Menu</p>
    </div>
  </section>
  		<center>
  			<fieldset style="width: 30%; background-color: white; margin-top: 100px;">
  				<h1>Menu utama</h1><br>
  			<table style="line-height: 30px;">
  				<tr>
  					<td>Klik <a href="insert.php" style="color: yellow;">Insert</a> untuk menambah data</td>
  				</tr>
  			
  				<tr>
  					<td>Klik <a href="update.php" style="color: yellow;">Update</a> untuk mengupdate data</td>
  				</tr>
  				<tr>
  					<td>Klik <a href="listFood.php" style="color: yellow;">Read</a> untuk melihat data</td>
  				</tr>
  				<tr>
  					<td>Klik <a href="delete2.php" style="color: yellow;">Delete</a> untuk menghapus data</td>
  				</tr>
  			</table>
  			</fieldset>
  		</center>
			
</body>
</html>