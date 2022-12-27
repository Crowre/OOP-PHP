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
}

class CetakInfoProduk
{
    public function cetak(produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new produk("Naruto", "Shounen Jump", "30000", "Masashi Kishimoto");
$produk2 = new produk("Dota2", "Valve", "240000", "IceFrog");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
