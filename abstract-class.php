<?php

// ABSTRACT CLASS
abstract class Produk
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

  // Method untuk men-setting/merubah property yg visibilitynya Private supaya dapat di-akses dari luar class
  public function setJudul($judulBaru)
  {
    $this->judul = $judulBaru;
  }

  // Method utk spy bisa akses property yang visibility-nya Private dari Luar class
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

  // Method Abstract
  abstract public function getInfoProduk();

  public function getInfo()
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
    $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
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
    $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
    return $str;
  }
}

// CHILD III
class BahasaPemrograman extends Produk
{
  public $edisi;
  public function __construct($judulKu = 'judul', $edisiKu = 'edisi', $penulisKu = 'penulis', $penerbitKu = 'penerbit', $hargaKu = 0)
  {
    parent::__construct($judulKu, $penulisKu, $penerbitKu, $hargaKu);
    $this->edisi = $edisiKu;
  }
  public function getInfoProduk()
  {
    $str = "Buku Bahasa Pemrograman : " . $this->edisi . ' | ' . $this->getInfo();

    return $str;
  }
}


// Membuat class baru yang berfungsi hanya untuk mencetak data Produk (data dgn type Produk)
class CetakInfoProduk
{
  public $daftarProduk = array();

  public function tambahProduk(Produk $produk)
  {
    $this->daftarProduk[] = $produk;
  }

  public function cetak()
  {
    $str = "DAFTAR PRODUK : <br>";

    foreach ($this->daftarProduk as $p) {
      $str .= "- {$p->getInfoProduk()} <br>";
    }
    return $str;
  }
}

// Object Instansiasi
$produk1 = new Komik('Naruto', 'Masasi Kishimoto', 'Shonen Jump', 30000, 100);
$produk2 = new Game('Uncharted', 'Neil Druckman', 'Sony Computer', 250000, 50);
$produk3 = new Komik('Wiro Sableng 212', 'Mbah Mirjan', 'Maxikom', 150000, 80);
$produk4 = new BahasaPemrograman('JAVASCRIPT untuk Orang Awam', 'Edisi ke-2', 'Irawan', 'MaxiKom', 150000);


$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
$cetakProduk->tambahProduk($produk3);
$cetakProduk->tambahProduk($produk4);

echo $cetakProduk->cetak();
echo '<hr>';

$produk1->setJudul('Naruto Berkelana');
echo $produk1->getJudul();
