<?php

class produk
{
    public $judul,
        $publisher,
        $harga,
        $penulis,
        $jmlHalaman,
        $waktuMain,
        $tipe;

    public function __construct($judul = "judul", $publisher = "publisher", $harga = 0, $penulis = "penulis", $jmlHalaman  = 0, $waktuMain = 0, $tipe)
    {
        $this->judul = $judul;
        $this->publisher = $publisher;
        $this->harga = $harga;
        $this->penulis = $penulis;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->publisher";
    }

    public function getInfoLengkap()
    {
        $str = "{$this->tipe} : {$this->getLabel()} (Rp.{$this->harga})";
        if ($this->tipe == "Komik") {
            $str .= "-{$this->jmlHalaman} Halaman.";
        } else if ($this->tipe == "Game") {
            $str .= "- {$this->waktuMain} Jam.";
        }
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

$produk1 = new produk("Naruto", "Shounen Jump", "30000", "Masashi Kishimoto", 100, 0, "Komik");
$produk2 = new produk("Dota2", "Valve", "240000", "IceFrog", 0, 2400, "Game");

//Komik : Naruto | Misasi Kishimoto, Shonen Jump (Rp 30.000) - 100 halaman
//Game : Dota 2 | IceFrog, Valve (240000) - 60 menit
