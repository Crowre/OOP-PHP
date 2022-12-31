<?php

require './App/init.php';

$produk1 = new Komik("Naruto", "Shounen Jump", "30000", "Masashi Kishimoto", 100,);
$produk2 = new Game("Dota2", "Valve", "240000", "IceFrog", 2400,);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

echo "<hr>";
new Coba();
