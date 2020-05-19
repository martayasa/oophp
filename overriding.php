<?php

class Produk
{
  // Buat property
  public $judul;
  public $penulis;
  public $penerbit;
  public $harga;

  // Membuat Method Constructor
  public function __construct($judulKu = 'judul', $penulisKu = 'penulis', $penerbitKu = 'penerbit', $hargaKu = 0)
  {
    $this->judul = $judulKu;
    $this->penulis = $penulisKu;
    $this->penerbit = $penerbitKu;
    $this->harga = $hargaKu;
  }

  // Method adalah Function di dalam class
  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduk()
  {
    $str = "{$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";

    return $str;
  }
}

// Membuat CLASS CHILD dari CLASS Produk
// Child-I
class Komik extends Produk
{
  public $jmlHalaman;

  public function __construct($judulKu = 'judul', $penulisKu = 'penulis', $penerbitKu = 'penerbit', $hargaKu = 0, $jmlHalamanKu = 0)
  {
    parent::__construct($judulKu, $penulisKu, $penerbitKu, $hargaKu);

    $this->jmlHalaman = $jmlHalamanKu;
  }

  public function getInfoProduk()
  {
    $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

// Child-II
class Game extends Produk
{
  public $waktuMain;

  public function __construct($judulKu = 'judul', $penulisKu = 'penulis', $penerbitKu = 'penerbit', $hargaKu = 0, $waktuMainKu = 0)
  {
    parent::__construct($judulKu, $penulisKu, $penerbitKu, $hargaKu);

    $this->waktuMain = $waktuMainKu;
  }

  public function getInfoProduk()
  {
    $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
    return $str;
  }
}

// Membuat class baru yang berfungsi hanya untuk mencetak data Produk (data dgn type Produk)
class CetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

// Object lengkap
$produk1 = new Komik('Naruto', 'Masasi Kishimoto', 'Shonen Jump', 30000, 100);

$produk2 = new Game('Uncharted', 'Neil Druckman', 'Sony Computer', 250000, 50);

echo $produk1->getInfoProduk();
echo '<p>';
echo $produk2->getInfoProduk();
