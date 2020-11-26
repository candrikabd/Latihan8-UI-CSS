<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>delete</title>
</head>
<body>
	<h1>Delete Item</h1>
		<form method="post" action="prodel.php" enctype="multipart/form-data">

			<table>
				<tr>
					<td>Masukkan id</td>
					<td>:</td>
					<td><input type="text" name="id"></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><button>Submit</button></td>
				</tr>
			</table>
			
		</form>
</body>
</html>