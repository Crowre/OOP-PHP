<?php

class produk
{
    public $judul,
        $publisher,
        $harga,
        $penulis;

    public function __construct($judul = "judul", $publisher = "publisher", $harga = 0, $penulis = "penulis")
    {
        $this->judul = $judul;
        $this->publisher = $publisher;
        $this->harga = $harga;
        $this->penulis = $penulis;
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
    public $jmlHalamn;

    public function __construct($judul = "judul", $publisher = "publisher", $harga = 0, $penulis = "penulis", $jmlHalamn = 0)
    {
        parent::__construct($judul, $publisher, $harga, $penulis);
        $this->jmlHalaman = $jmlHalamn;
    }

    public function getInfoProduk()
    {
        $str = "Komik :" . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends produk
{
    public $waktuMain;

    public function __construct($judul = "judul", $publisher = "publisher", $harga = 0, $penulis = "penulis", $waktuMain = 0)
    {
        parent::__construct($judul, $publisher, $harga, $penulis);
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        $str = "Game :" . parent::getInfoProduk() . " - {$this->waktuMain} Jam.";
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

$produk1 = new Komik("Naruto", "Shounen Jump", "30000", "Masashi Kishimoto", 100,);
$produk2 = new Game("Dota2", "Valve", "240000", "IceFrog", 2400,);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
