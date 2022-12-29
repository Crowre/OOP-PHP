<?php

class produk
{
    private $judul,
        $publisher,
        $penulis,
        $harga;

    protected $diskon = 0;

    public function __construct(
        $judul = "judul",
        $publisher = "publisher",
        $harga = 0,
        $penulis = "penulis",
        $diskon = 0
    ) {
        $this->judul = $judul;
        $this->publisher = $publisher;
        $this->harga = $harga;
        $this->penulis = $penulis;
        $this->diskon = $diskon;
    }

    public function setJudul($judul)
    {
        $this->judul = $judul;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    }

    public function getPublisher($publisher)
    {
        return $this->publisher;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getDiskon($diskon)
    {
        return $this->diskon;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
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
echo "<hr>";

$produk2->setDiskon(50);
echo $produk2->getHarga();
echo "<hr>";

$produk1->setJudul("JudulBaru");
echo $produk1->getJudul();
echo "<br>";
$produk1->setPenulis("Wildan");
echo $produk1->getPenulis();
