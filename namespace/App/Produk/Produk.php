<?php

namespace App\Produk;

// CLASS -> adalah sebuah template
// ABSTRACT CLASS ->Minimal ada 1 method abstract dalam class abstract
// 
abstract class Produk
{
  // Buat property
  protected $judul, $penulis, $penerbit, $harga, $diskon;

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

  // ABSTRACT METHOD
  abstract public function getInfo();
}
