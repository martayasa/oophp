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
  public $tipe;

  // Membuat Method Constructor
  public function __construct($judulKu = 'judul', $penulisKu = 'penulis', $penerbitKu = 'penerbit', $hargaKu = 0, $jmlHalamanKu = 0, $waktuMainKu = 0, $tipeKu = 'Tipe')
  {
    $this->judul = $judulKu;
    $this->penulis = $penulisKu;
    $this->penerbit = $penerbitKu;
    $this->harga = $hargaKu;
    $this->jmlHalaman = $jmlHalamanKu;
    $this->waktuMain = $waktuMainKu;
    $this->tipe = $tipeKu;
  }

  // Method adalah Function di dalam class
  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoLengkap()
  {
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp.{$this->harga})";
    if ($this->tipe == "Komik") {
      $str .= " - {$this->jmlHalaman} Halaman.";
    } else if ($this->tipe == "Game") {
      $str .= " ~ {$this->waktuMain} Jam.";
    }
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
$produk1 = new Produk('Naruto', 'Masasi Kishimoto', 'Shonen Jump', 30000, 100, 0, 'Komik');

$produk2 = new Produk('Uncharted', 'Neil Druckman', 'Sony Computer', 250000, 0, 50, 'Game');

// Komik : Naruto | Masasi Kishimoto, Shonen Jump (Rp. 30000) - 100 halaman
// Game  : Uncharted | Neil Drukman, Sony Comuter (Rp. 250000) ~ 50 Jam

echo $produk1->getInfoLengkap();
echo '<p>';
echo $produk2->getInfoLengkap();
