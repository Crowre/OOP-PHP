<?php

abstract class produk
{
    protected $judul,
        $publisher,
        $penulis,
        $harga,
        $diskon = 0;

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

    abstract public function getInfo();
}
