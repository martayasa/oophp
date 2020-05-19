<?php
// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/User.php';

// require_once 'Service/User.php';

// function autoload($class)
// {
// }
// spl_autoload_register(autoload());

// Atau bisa langsung seperti ini : Fungsi tanpa nama (closure)
spl_autoload_register(function ($class) {
  // App\Produk\User = ['App', 'Produk', 'User']
  $class = explode('\\', $class); // Memecah App\Produk\User pada setiap character '\'
  $class = end($class); // Hasilnya ditimpa kembali dengan mengambil elemen array yg TERAKHIR ->dgn keyword 'end()'

  require_once __DIR__ . '/Produk/' . $class . '.php';
});

spl_autoload_register(function ($class) {
  // App\Service\User = ['App', 'Service', 'User']
  $class = explode('\\', $class); // Memecah App\Produk\User pada setiap character '\'
  $class = end($class); // Hasilnya ditimpa kembali dengan mengambil elemen array yg TERAKHIR ->dgn keyword 'end()'

  require_once __DIR__ . '/Service/' . $class . '.php';
});
