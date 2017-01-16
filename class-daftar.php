<?php
session_start();
// session_destroy();
require 'class.php';

$daftar = new Murid();

$daftar->cekDaftar();

if (isset($_POST['daftar'])) {
	$daftar->dataMurid($_POST['nis'], $_POST['nama'], $_POST['jk'],
		$_POST['agama'], $_POST['kelas']);

	$daftar->daftarSekolah();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Belajar Class | Class Daftar</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="class-daftar.php" method="POST">
		<p><input type="text" name="nis" placeholder="Nomor Induk Siswa"></p>
		<p><input type="text" name="nama" placeholder="Nama Siswa"></p>
		<p><input type="text" name="jk" placeholder="Jenis Kelamin"></p>
		<p><input type="text" name="agama" placeholder="Agama"></p>
		<p><input type="text" name="kelas" placeholder="Kelas"></p>
		<button name="daftar">Daftar</button>
	</form>
	<br>
	<table border="1" cellpadding="10" cellspaccing="0">
		<tr>
			<td>No</td>
			<td>NIS</td>
			<td>NAMA</td>
			<td>JENIS KELAMIN</td>
			<td>AGAMA</td>
			<td>KELAS</td>
		</tr>
	<?php $no = 1; ?>
	<?php foreach ($_SESSION['daftar_sd'] as $key => $val) : ?>
		<tr>
			<td><?= $no++ ?></td>
			<td><?= $val['nis'] ?></td>
			<td><?= $val['nama'] ?></td>
			<td><?= $val['jk'] ?></td>
			<td><?= $val['agama'] ?></td>
			<td><?= $val['kelas'] ?></td>
		</tr>
	<?php endforeach ?>
	</table>
</body>
</html>
