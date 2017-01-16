<?php
session_start();
// session_destroy();
require 'class.php';

if (isset($_POST['tambah'])) {
    $toko = new Toko($_POST['nama_toko'], $_POST['no_produk'],
            $_POST['nama_produk'], $_POST['kategori'], $_POST['stok'],
            $_POST['harga_beli'], $_POST['harga_jual'] );

    $toko->tambahProduk();
}
?>

<form action="class-toko.php" method="POST">
    <input type="text" name="nama_toko" placeholder="Nama Toko"><br>
    <input type="text" name="no_produk" placeholder="No Produk"><br>
    <input type="text" name="nama_produk" placeholder="Nama Produk"><br>
    <input type="text" name="kategori" placeholder="Kategori"><br>
    <input type="text" name="stok" placeholder="Stok Produk"><br>
    <input type="text" name="harga_beli" placeholder="Harga Beli"><br>
    <input type="text" name="harga_jual" placeholder="Harga Jual"><br>
    <button type="submit" name="tambah">Tambah Produk</button>
</form>

<table border="1" cellpadding="5">
    <tr>
        <td>NO</td>
        <td>NAMA TOKO</td>
        <td>NO PRODUK</td>
        <td>NAMA PRODUK</td>
        <td>KATEGORI</td>
        <td>STOK</td>
        <td>HARGA BELI</td>
        <td>HARGA JUAL</td>
    </tr>
<?php if (isset($_POST['tambah'])) : ?>
    <?php $no = 1 ?>
    <?php foreach ($_SESSION[$toko->nama_session] as $key => $val) : ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $val['nama_toko'] ?></td>
        <td><?= $val['no_produk'] ?></td>
        <td><?= $val['nama_produk'] ?></td>
        <td><?= $val['kategori'] ?></td>
        <td><?= $val['stok'] ?></td>
        <td><?= $val['harga_beli'] ?></td>
        <td><?= $val['harga_jual'] ?></td>
    </tr>
    <?php endforeach; ?>
<?php endif; ?>
</table>
