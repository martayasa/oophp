<?php

// Jualan Produk
// Komik
// Game
class Produk
{
  // Format penulisan property : visibility $namaVariabel = 'nilai awal (default) [optional]';
  public $judul = 'judul';
  public $penulis = 'penulis', $penerbit = 'penerbit', $harga = 0;

  // Method adalah Function di dalam class
  public function sayHello()
  {
    return 'Hello World';
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit"; // $this fungsinya utk ambil property dlm class Produk.
  }
}

// Membuat Object

// $produk1 = new Produk();
// $produk1->judul = 'Naruto';

// var_dump($produk1);
// echo '<p>';

// $produk2 = new Produk();
// // jika judulnya diganti/ditimpa dgn judul lain :
// $produk2->judul = 'Uncharted'; // caranya seperti ini.

// // cara menambah Property baru :
// $produk2->tambahProperty = 'hahahaa';
// var_dump($produk2->judul);
// echo '<hr>';
// var_dump($produk2->tambahProperty);

// Object lengkap
$produk3 = new Produk();
$produk3->judul = 'Naruto';
$produk3->penulis = 'Masasi Kishimoto';
$produk3->penerbit = 'Shonen Jump';
$produk3->harga = 30000;

var_dump($produk3);
echo "<hr>";

// Misal jika untuk buat sebuah label :
echo "Komik : $produk3->penulis, $produk3->penerbit";
echo '<hr>';

// Memanggil method sayHello();
$produk3->sayHello();

// Mencetak method
echo $produk3->sayHello();
echo '<hr>';

// Memanggil method getLabel();
echo "Komik : " . $produk3->getLabel();
echo '<hr>';

// Object lengkap
$produk4 = new Produk();
$produk4->judul = 'Uncharted';
$produk4->penulis = 'Neil Druckman';
$produk4->penerbit = 'Sony Computer';
$produk4->harga = 250000;

echo "Komik : " . $produk3->getLabel();
echo "<br>";

echo "Game : " . $produk4->getLabel();
$produk4->propertyBaru = 'judul baru';
echo '<br>';
echo "Game : $produk4->propertyBaru.";
