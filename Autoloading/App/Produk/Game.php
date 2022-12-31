<?php

class Game extends produk implements InfoProduk
{
    public $waktuMain;

    public function __construct($judul = "judul", $publisher = "publisher", $harga = 0, $penulis = "penulis", $waktuMain = 0)
    {
        parent::__construct($judul, $publisher, $harga, $penulis);
        $this->waktuMain = $waktuMain;
    }

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";

        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Game :" . $this->getInfo() . " - {$this->waktuMain} Jam.";
        return $str;
    }
}
