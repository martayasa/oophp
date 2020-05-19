<?php

require_once 'App/init.php';

// // Instansiasi Object
// $produk1 = new Komik('Naruto', 'Masasi Kishimoto', 'Shonen Jump', 30000, 100);
// $produk2 = new Game('Uncharted', 'Neil Druckman', 'Sony Computer', 250000, 50);


// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();
// echo '<hr>';

echo '<b>Ini dengan cara langsung Instansiasi memakai NAMESPACE-nya</b><p> ';
new App\Service\User();
echo '<br>';
new App\Produk\User();
echo '<hr>';

// Dengan memakai nama alias
use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

echo '<b>Ini dengan cara memakai nama alias :</b><p> ';
new ServiceUser;
echo '<br>';
new ProdukUser;
