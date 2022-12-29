<?php

use produk as GlobalProduk;

class produk
{
    public $judul,
        $publisher,
        $harga,
        $penulis,
        $jmlHalaman,
        $waktuMain;

    public function __construct($judul = "judul", $publisher = "publisher", $harga = 0, $penulis = "penulis", $jmlHalaman  = 0, $waktuMain = 0,)
    {
        $this->judul = $judul;
        $this->publisher = $publisher;
        $this->harga = $harga;
        $this->penulis = $penulis;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->publisher";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";

        return $str;
    }
}

class Komik extends produk
{
    public function getInfoProduk()
    {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends produk
{
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) - {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk
{
    public function cetak(produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Shounen Jump", "30000", "Masashi Kishimoto", 100, 0,);
$produk2 = new Game("Dota2", "Valve", "240000", "IceFrog", 0, 2400,);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
