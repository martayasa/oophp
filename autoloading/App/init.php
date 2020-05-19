<?php
// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';

// function autoload($class)
// {
// }
// spl_autoload_register(autoload());

// Atau bisa langsung seperti ini : Fungsi tanpa nama (closure)
spl_autoload_register(function ($class) {
  require_once __DIR__ . '/Produk/' . $class . '.php';
});
