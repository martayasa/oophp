<?php

class Produk
{
  // Format penulisan property : visibility $namaVariabel = 'nilai awal (default) [optional]';
  public $judul;
  public $penulis;
  public $penerbit;
  public $harga;
  // Bisa juga ditulis seperti ini : public $judul, $penulis, $penerbit, $harga;

  // Membuat Method Constructor dan di-isi dgn nilai default
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
    return "$this->penulis, $this->penerbit"; // "$this" fungsinya utk ambil property dlm class Produk.
  }
}
// Object lengkap
$produk1 = new Produk('Naruto', 'Masasi Kishimoto', 'Shonen Jaump', 30000);

$produk2 = new Produk('Uncharted', 'Neil Druckman', 'Sony Computer', 250000);

$produk3 = new Produk('Dragon Ball'); // Ini akan menghasilkan Produk dgn property judul 
// Dragon Ball, sedangkan property yg lainnya akan di-isi dgn nilai default

// Memanggil method getLabel();
echo "Komik : " . $produk1->getLabel();
echo "<br>";

echo "Game : " . $produk2->getLabel();
echo "<br>";

var_dump($produk3);
