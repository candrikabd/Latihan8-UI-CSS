<!DOCTYPE html>
<html>
<head>
	<title>View Makanan</title>
</head>
<body>
	<h1>View Makanan dan minuman</h1>
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