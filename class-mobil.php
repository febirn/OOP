<?php
require 'class.php';

$mobil = new Mobil();
$mobil->setMobil('Toyota', 4, 2014);
$mobil->tampil();

$truk = new Truck();
$truk->setMobil('HINO', 10, 2016);
$truk->tampil();
?>
