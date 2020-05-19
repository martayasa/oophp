<?php

class Produk
{
  // Buat property
  public $judul;
  public $penulis;
  public $penerbit;
  public $harga;
  public $jmlHalaman;
  public $waktuMain;

  // Membuat Method Constructor
  public function __construct($judulKu = 'judul', $penulisKu = 'penulis', $penerbitKu = 'penerbit', $hargaKu = 0, $jmlHalamanKu = 0, $waktuMainKu = 0)
  {
    $this->judul = $judulKu;
    $this->penulis = $penulisKu;
    $this->penerbit = $penerbitKu;
    $this->harga = $hargaKu;
    $this->jmlHalaman = $jmlHalamanKu;
    $this->waktuMain = $waktuMainKu;
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
  public function getInfoProduk()
  {
    $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

// Child-II
class Game extends Produk
{
  public function getInfoProduk()
  {
    $str = "Game : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga}) ~ {$this->waktuMain} Jam.";
    return $str;
  }
}

// Membuat class baru yang berfungsi hanya untuk mencetak data Produk (data dgn type Produk)
// class CetakInfoProduk
// {
//   public function cetak(Produk $produk)
//   {
//     $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
//     return $str;
//   }
// }

// Object lengkap
$produk1 = new Komik('Naruto', 'Masasi Kishimoto', 'Shonen Jump', 30000, 100, 0);

$produk2 = new Game('Uncharted', 'Neil Druckman', 'Sony Computer', 250000, 0, 50);

// Komik : Naruto | Masasi Kishimoto, Shonen Jump (Rp. 30000) - 100 halaman
// Game  : Uncharted | Neil Drukman, Sony Comuter (Rp. 250000) ~ 50 Jam

echo $produk1->getInfoProduk();
echo '<p>';
echo $produk2->getInfoProduk();
