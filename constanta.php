<?php
// Membuat Konstanta ->Nama konstanta harus pakai HURUP BESAR semua
// Dibuat dengan 2 cara
// 1. define(name, value);

// define('NAMA', 'Martaysa');

// // Utk mengakses konstanta
// echo 'Nama saya : ' . NAMA;
// echo '<br>';

// // 2. dengan memakai keyword CONST

// const UMUR = 32;
// echo 'Umur saya : ' . UMUR . 'Tahun';
// echo '<br>';


// Perbedaan antara define() dengan const
// Ketika kita hendak membuat program degan OOP maka :
// define() ->Tidak bisa disimpan/ditempatkan di dalam sebuah class
// const    ->Bisa disimapan/ditempatkan di dalam sebuah class

class Coba
{
  const NAMA = "Martaysa";
  const UMUR = 49;
}

// Cara mengaksesnya
echo 'Nama saya : ' . Coba::NAMA;
echo '<br>';
echo 'Umur saya : ' . Coba::UMUR . ' tahun';


// MAGIC CONSTANT ->Constant yang sdh disediakan oleh PHP itu sendiri :
// __LINE__ ->Utk menampilkan nomor baris keberapa kode yg ditulis
// __FILE__ ->Utk menmapilkan nama file & alamat file yang sedang dijalankan di browser
// __DIR__  ->Utk menmapilkan alamat file yang sedang dijalankan di browser
// __FUNCTION__
// __CLASS__
// __TRAIT__
// __METHOD__
// __NAMESPACE__

echo '<hr>';
echo __LINE__;
echo '<p>';
echo __FILE__;
echo '<p>';
echo __DIR__;
echo '<p>';

function cobaFungsi()
{
  return __FUNCTION__;
}

echo cobaFungsi();
echo '<p>';

class cobaClass
{
  public $kelas = __CLASS__;
}
$obj = new cobaClass;
echo $obj->kelas;

echo '<p>';
echo __TRAIT__;
echo '<p>';
echo __METHOD__;
echo '<p>';
echo __NAMESPACE__;
echo '<p>';
