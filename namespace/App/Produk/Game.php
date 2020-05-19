<?php

namespace App\Produk;

// Child-II
class Game extends Produk implements InfoProduk
{
  public $waktuMain;

  public function __construct($judulKu = 'judul', $penulisKu = 'penulis', $penerbitKu = 'penerbit', $hargaKu = 0, $waktuMainKu = 0)
  {
    parent::__construct($judulKu, $penulisKu, $penerbitKu, $hargaKu);

    $this->waktuMain = $waktuMainKu;
  }

  public function getInfo()
  {
    $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";

    return $str;
  }

  public function getInfoProduk()
  {
    $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
    return $str;
  }
}
