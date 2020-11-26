
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="Css/style.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

  <title>Menu makanan</title>
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
        <li><a href="index.php">MENU UTAMA</a></li>

      </ul>
    </div>
  </header>

  <section class="label">
    <div class="container">
      <p>HOME / FOOD LIST</p><h5 style="text-align: right;">Klik <a href="insert.php" style="font-size: 20px;"> [+] </a> untuk menambah item</h5>
    </div>
  </section>

  <?php 

    include 'connect.php';
    $getFood = $connection->query("SELECT * FROM makanan");
    while ( $fetchFood = $getFood->fetch_assoc()) {
      
  ?>
  
    <table style="display:inline-table; width: 200px;">
      <tr>
        <td><img style="width: 100%;" src="<?=$fetchFood["gambar"]?>"></td>
      </tr>
      <tr>
        <td>ID : <strong><?=$fetchFood["id"]?></strong></td>
      </tr>
      <tr>
        <td>
          Nama : <strong><?=$fetchFood["nama"]?></strong>
        </td>
      </tr>
      <tr>
        <td>
          Harga : <strong>Rp. <?=number_format($fetchFood["harga"])?></strong>
        </td>
      </tr>
      <tr>
        <td>
          <a href="update.php?id=<?=$fetchFood["id"]?>"><button>Update</button></a>
          <a href="delete.php?id=<?=$fetchFood["id"]?>"><button>Delete</button></a>
        </td>
      </tr>
    </table>

  <?php 
    }

  ?>
  

</body>
</html>