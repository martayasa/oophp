<?php

namespace App\Produk;

// Membuat CLASS CHILD dari CLASS Produk
// Child-I
class Komik extends Produk implements InfoProduk
{
  public $jmlHalaman;

  public function __construct($judulKu = 'judul', $penulisKu = 'penulis', $penerbitKu = 'penerbit', $hargaKu = 0, $jmlHalamanKu = 0)
  {
    parent::__construct($judulKu, $penulisKu, $penerbitKu, $hargaKu);

    $this->jmlHalaman = $jmlHalamanKu;
  }

  public function getInfo()
  {
    $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";

    return $str;
  }

  public function getInfoProduk()
  {
    $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}
