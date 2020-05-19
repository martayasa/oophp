<?php

class Produk
{
  // Buat property
  private
    $judul,
    $penulis,
    $penerbit,
    $harga,
    $diskon;

  // Membuat Method Constructor
  public function __construct($judulKu = 'judul', $penulisKu = 'penulis', $penerbitKu = 'penerbit', $hargaKu = 0)
  {
    $this->judul = $judulKu;
    $this->penulis = $penulisKu;
    $this->penerbit = $penerbitKu;
    $this->harga = $hargaKu;
  }

  // Method untuk men-setting/merubah property yg visibilitynya Private dari luar
  public function setJudul($judulBaru)
  {
    $this->judul = $judulBaru;
  }

  // Method utk spy bisa akses property yang visibility-nya Private dari Luar
  public function getJudul()
  {
    return $this->judul;
  }

  // Method utk Property Penulis
  public function setPenulis($penulisBaru)
  {
    $this->penulis = $penulisBaru;
  }

  public function getPenulis()
  {
    return $this->penulis;
  }

  // Method utk Property Penerbit
  public function setPenerbit($penerbitBaru)
  {
    $this->penulis = $penerbitBaru;
  }

  public function getPenerbit()
  {
    return $this->penerbit;
  }

  // Method utk Property Harga
  public function setHarga($hargaBaru)
  {
    $this->harga = $hargaBaru;
  }

  // Buat method utk ambil harga dari class Produk
  public function getHarga()
  {
    return $this->harga - ($this->harga * $this->diskon / 100);
  }

  public function setDiskon($diskonKu = 0)
  {
    $this->diskon = $diskonKu;
  }

  public function getDiskon()
  {
    return $this->diskon;
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
echo "<hr>";


$produk2->setDiskon(50);
echo "Harga Game : " . $produk2->getHarga() . " ->Setelah diskon " . $produk2->getDiskon() . "%";
echo "<hr>";

$produk1->setJudul("Naruto Versi-2");
echo $produk1->getJudul();
echo "<hr>";

$produk2->setPenulis("Martayasa");
echo $produk2->getPenulis();
