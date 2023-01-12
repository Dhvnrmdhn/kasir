<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta nameform="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
	<style>
		body {
			background-image: url(bg1.jpg);
			background-size: cover;
		}
		.kalkulator {
   			width: 400px;
   			height: 200px;
    		background-color: black transparent;
    		margin: auto;
    		margin-top: 160px;
			border: 3px solid black;
			backdrop-filter: blur(20px);
			box-shadow: 10px 10px 10px 10px;
		}

		.judul {
    		text-align: center;
    		color: rgb(14, 11, 11);
		}
		.reset {
			margin-left: 10px;
		}
	</style>
</head>
<body>
<form method="POST" action="hasil.php">
<div class="kalkulator">
<caption><h4 class="judul">Kasir</h4></caption>
	<table>
	<tr>
		<td><label>Masukkan Nama:</label></td>
		<td><input type="text" name="pembeli"></td>
	</tr>
	<tr>
		<td><label>Masukkan Barang</label></td>
		<td><input type="text" name="barang"></td>
	</tr>
	<tr>
		<td><label>Harga Barang</label></td>
		<td><input type="number" name="harga"></td>
	</tr>
	<tr>
		<td><label for="disk">Diskon</label></td>
		<td><input type="number" name="diskon"></td>
	</tr>
</table>
			<a href="kalkulator.php"><button type="button" class="reset">Reset</button></a>
			
			<button type="submit" name="tambah"<?php echo isset($_POST['hasil'])?'style="background-color:white;"':'' ?>>Hitung</button>
</div>
</form>
</body>
</html>