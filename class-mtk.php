<?php
require 'class.php';

//perkalian
$perkalian = new Matematika();
$perkalian->setAngka(30, 20);

//pembagian
$pembagian = new Matematika();
$pembagian->setAngka(40,2);

//penambahan mengambail data angka dari perkalian
$tambah1 = $perkalian->inputAngka1;
$tambah2 = $perkalian->inputAngka2;

?>

<!DOCTYPE html>
<html>
<head>
	<title>Belajar Class | Class MTK</title>
</head>
<body>
	<section>
		<article>
			<h3>Hasil Perkalian <?= $perkalian->inputAngka1 ?> 
				x <?= $perkalian->inputAngka2 ?> 
				= <?= $perkalian->kali() ?></h3>
			<h3>Hasil Pembagian <?= $pembagian->inputAngka1 ?>
				: <?= $pembagian->inputAngka2 ?>
				= <?= $pembagian->bagi() ?></h3>
			<h3>Hasil Penambahan <?= $tambah1 ?> + <?= $tambah2 ?> 
				= <?= $perkalian->tambah() ?></h3>
		</article>
	</section>	
</body>
</html>
