<?php

class Komik extends produk implements InfoProduk
{
    public $jmlHalamn;

    public function __construct($judul = "judul", $publisher = "publisher", $harga = 0, $penulis = "penulis", $jmlHalamn = 0)
    {
        parent::__construct($judul, $publisher, $harga, $penulis);
        $this->jmlHalaman = $jmlHalamn;
    }

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";

        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Komik :" . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}
