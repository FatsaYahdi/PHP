<?php
$a = readline("Masukkan Harga : ");
if ($a >= 200000) {
    $d = 30;
    $hd = $a * ($d / 100);
    $b = $a - $hd;
    echo "Harga : Rp.{$a}" . PHP_EOL . "Total Diskon : $hd" . PHP_EOL . "Diskon : {$d}%" . PHP_EOL . "Bayar : Rp.{$b}" . PHP_EOL;
} elseif ($a >= 100000) {
    $d = 20;
    $hd = $a * ($d / 100);
    $b = $a - $hd;
    echo "Harga : Rp.{$a}" . PHP_EOL . "Total Diskon : $hd" . PHP_EOL . "Diskon : {$d}%" . PHP_EOL . "Bayar : Rp.{$b}" . PHP_EOL;
} elseif ($a >= 50000) {
    $d = 15;
    $hd = $a * ($d / 100);
    $b = $a - $hd;
    echo "Harga : Rp.{$a}" . PHP_EOL . "Total Diskon : $hd" . PHP_EOL . "Diskon : {$d}%" . PHP_EOL . "Bayar : Rp.{$b}" . PHP_EOL;
} elseif ($a >= 10000) {
    $d = 10;
    $hd = $a * ($d / 100);
    $b = $a - $hd;
    echo "Harga : Rp.{$a}" . PHP_EOL . "Total Diskon : $hd" . PHP_EOL . "Diskon : {$d}%" . PHP_EOL . "Bayar : Rp.{$b}" . PHP_EOL;
} else {
    $d = 0;
    $hd = $a * ($d / 100);
    $b = $a - $hd;
    echo "Harga : Rp.{$a}" . PHP_EOL . "Total Diskon : $hd" . PHP_EOL . "Diskon : {$d}%" . PHP_EOL . "Bayar : Rp.{$b}" . PHP_EOL;
}