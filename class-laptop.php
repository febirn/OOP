<?php
require 'class.php';

//Buat Object laptop_andi
$laptop_andi = new Laptop();

//Property
$laptop_andi->pemilik = "Andi Prayoga";
$laptop_andi->merk = "Acer";
$laptop_andi->warna = "Hitam Pekat";
$laptop_andi->ukuran_layar = "14 Inch";
$laptop_andi->processor = "Core i5";

//Buat Object Laptop
$laptop = new Laptop();

if (isset($_POST['input'])) {
	//Property
	$laptop->pemilik = $_POST['pemilik'];
	$laptop->merk = $_POST['merk'];
	$laptop->warna = $_POST['warna'];
	$laptop->ukuran_layar = $_POST['layar'];
	$laptop->processor = $_POST['processor']; 
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Belajar Class | Class Latop</title>
</head>
<body>
	<h3>Contoh Pertama</h3>
	<p> <b><?= $laptop_andi->pemilik ?></b> Mempunyai Sebuah Laptop Yang 
		bermerek <b><?= $laptop_andi->merk ?></b>. </p>
	<p> Laptopnya berwarna <b><?= $laptop_andi->warna ?></b>, ukuran layarnya 
		<b><?= $laptop_andi->ukuran_layar ?></b> dan laptopnya memakai 
		processor <b><?= $laptop_andi->processor ?></b>. </p>
	<p> <b><?= $laptop_andi->pemilik ?></b> Mencoba Untuk 
		<b><?= $laptop_andi->hidupkanLaptop() ?></b> dan Laptopnya Menyala. </p>
	<hr>
	<h3>Contoh Kedua</h3>
	<form action="class-laptop.php" method="POST">
		<p> <input type="text" name="pemilik" placeholder="Pemilik"> </p>
		<p> <input type="text" name="merk" placeholder="Merk"> </p>
		<p> <input type="text" name="warna" placeholder="Warna"> </p>
		<p> <input type="text" name="layar" placeholder="Layar"> </p>
		<p> <input type="text" name="processor" placeholder="Processor"> </p>
		<button name="input">Input </button>
	</form><br>
	<?php if (isset($_POST['input'])) : ?>
	<p> <b><?= $laptop->pemilik ?></b> Mempunyai Sebuah Laptop Yang bermerek 
		<b><?= $laptop->merk ?></b>. </p>
	<p> Laptopnya berwarna <b><?= $laptop->warna ?></b>, ukuran layarnya 
		<b><?= $laptop->ukuran_layar ?></b> dan laptopnya memakai 
		processor <b><?= $laptop->processor ?></b>. </p>
	<p> <b><?= $laptop->pemilik ?></b> Mencoba Untuk 
		<b><?= $laptop->matikanLaptop() ?></b> dan Laptopnya Mati. </p>
	<?php endif; ?>
</body>
</html>