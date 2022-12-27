<?php

class produk
{
    public $judul,
        $publisher,
        $harga,
        $penulis;

    public function getLabel()
    {
        return "$this->penulis, $this->publisher";
    }
}
// $produk1 = new produk();
// $produk1->judul = "Naruto";
// $produk2 = new produk();
// $produk2->judul = "Dota2";
// $produk2->tambahProperty = "hahaha";
// var_dump($produk1);
// var_dump($produk2);

$produk3 = new produk();
$produk3->judul =  "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->harga = "30000";
$produk3->publisher = "Shounen Jump";

// var_dump($produk3);

//membuat label
// echo "Kimik : $produk3->penulis, $produk3->publisher";
// echo "<br>";
// echo $produk3->getLabel();
// echo "<br>";
$produk4 = new produk();
$produk4->judul = "Dota2";
$produk4->publisher = "Valve";
$produk4->penulis = "IceFrog";
$produk4->harga = "240000";

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
