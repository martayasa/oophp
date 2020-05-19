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
}

// Membuat class baru yang berfungsi hanya untuk mencetak data Produk (data dgn type Produk)
class CetakInfoProduk
{
  // Buat Method yg tampilannya seperti ini :
  // $str = "Naruto | Masasi Kihisimoto, Shonen Jump (Rp. 30000)";
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

// Object lengkap
$produk1 = new Produk('Naruto', 'Masasi Kishimoto', 'Shonen Jump', 30000);

$produk2 = new Produk('Uncharted', 'Neil Druckman', 'Sony Computer', 250000);

// Memanggil method getLabel();
echo "Komik : " . $produk1->getLabel();
echo "<br>";

echo "Game : " . $produk2->getLabel();
echo "<br>";


echo '<hr>';
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
