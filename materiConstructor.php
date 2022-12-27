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

$produk1 = new produk("Naruto", "Shounen Jump", "30000", "Masashi Kishimoto");
$produk2 = new produk("Dota2", "Valve", "240000", "IceFrog");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
