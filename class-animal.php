<?php
require 'class.php';

$lion = new Animal('Singa', 'Singa Jantan', 'Daging Import');

if (isset($_POST['post'])) {
    $hewan = new Animal($_POST['nama'], $_POST['jenis'], $_POST['makanan']);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Belajar Class | Class Animal</title>
</head>
<body>
    <p> Hewan ini adalah <b><?= $lion->nama ?></b>, Dia Merupakan
        <b><?= $lion->jenis ?></b>, Makanan kesukaannya adalah
        <b><?= $lion->makanan ?></b> </p>
    <form action="class-animal.php" method="POST">
        <input type="text" name="nama" placeholder="Nama Hewan"><br>
        <input type="text" name="jenis" placeholder="Jenis"><br>
        <input type="text" name="makanan" placeholder="Makanan"><br>
        <button type="submit" name="post">Cek Animal</button>
    </form>
<?php if (isset($_POST['post'])) : ?>
    <p> Hewan ini adalah <b><?= $hewan->nama ?></b>, Dia Merupakan
        <b><?= $hewan->jenis ?></b>, Makanan kesukaannya adalah
        <b><?= $hewan->makanan ?></b> </p>
<?php endif; ?>

</body>
</html>
