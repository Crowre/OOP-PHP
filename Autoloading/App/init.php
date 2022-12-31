<?php

// require 'Produk/InfoProduk.php';
// require 'Produk/produk.php';
// require 'Produk/Komik.php';
// require 'Produk/Game.php';
// require 'Produk/CetakInfoProduk.php';


spl_autoload_register(function ($class) {
    require_once 'Produk/' . $class . '.php';
});
