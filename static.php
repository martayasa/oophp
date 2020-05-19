<?php
class ContohStatic
{
  public static $angka = 1;

  public static function halo()
  {
    return "Halo.!";
  }

  public static function hello()
  {
    return "Hello " . self::$angka++ . " kali.";
  }
}

echo ContohStatic::$angka;
echo '<hr>';

echo ContohStatic::halo();
echo '<hr>';

echo ContohStatic::hello();
echo '<br>';
echo ContohStatic::hello();
