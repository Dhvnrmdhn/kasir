<?php 
	$hasil = "";
	if(isset($_POST['tambah'])) {
		$harga = $_POST['harga'];
		$diskon = $_POST['diskon'];
		$nmp = $_POST['pembeli'];
		$nmb = $_POST['barang'];
		$hasil = ($diskon/100)*$harga;
        $bayar = $harga - $hasil;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jumlah Harga</title>
    <style>
		body {
			background-image: url(bg1.jpg);
			background-size: cover;
		}
		.hasil {
   			width: 400px;
   			height: 200px;
    		background-color: black transparent;
    		margin: auto;
    		margin-top: 160px;
			border: 3px solid black;
            box-shadow: 10px 10px 10px 10px black;
			backdrop-filter: blur(20px);
		}

		.judul1 {
    		text-align: center;
    		color: rgb(14, 11, 11);
		}
	</style>
</head>
<body>
<div class="hasil">
<caption><h4 class="judul1">Jumlah Harga</h4></caption>
	<label><?php echo"Nama Pembeli = ". $nmp ."<br>";?></label>
	<label><?php echo"Nama Barang = ". $nmb ."<br>";?></label>
    <label><?php echo"Diskon = ". $hasil."<br>";?></label>
	<label><?php echo"Total Harga Barang = ". $bayar ."<br>";?></label>
    <br>
    <a href="kalkulator.php">Kembali</a>
</body>
</html>