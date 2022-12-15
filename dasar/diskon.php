<?php
$harga = 1000;
if ($harga >= 10000 && $harga < 50000 ) {
    echo "Harga : $harga" . PHP_EOL;
    $diskon = 10;
    $hasilDiskon = $harga * (10 / 100);
    echo "Total Diskon : $hasilDiskon" . PHP_EOL;
    echo "Diskon : {$diskon}%" . PHP_EOL;
    $bayar = $harga - $hasilDiskon;
    echo "Bayar : $bayar" . PHP_EOL;
} else if ($harga >= 50000 && $harga < 100000) {
    echo "Harga : $harga" . PHP_EOL;
    $diskon = 15;
    $hasilDiskon = $harga * (15 / 100);
    echo "Total Diskon : $hasilDiskon" . PHP_EOL;
    echo "Diskon : {$diskon}%" . PHP_EOL;
    $bayar = $harga - $hasilDiskon;
    echo "Bayar : $bayar" . PHP_EOL;
} else if ($harga >= 100000 && $harga < 200000) {
    echo "Harga : $harga" . PHP_EOL;
    $diskon = 20;
    $hasilDiskon = $harga * (20 / 100);
    echo "Total Diskon : $hasilDiskon" . PHP_EOL;
    echo "Diskon : {$diskon}%" . PHP_EOL;
    $bayar = $harga - $hasilDiskon;
    echo "Bayar : $bayar" . PHP_EOL;
} else if ($harga >= 200000) {
    echo "Harga : $harga" . PHP_EOL;
    $diskon = 30;
    $hasilDiskon = $harga * (30 / 100);
    echo "Total Diskon : $hasilDiskon" . PHP_EOL;
    echo "Diskon : {$diskon}%" . PHP_EOL;
    $bayar = $harga - $hasilDiskon;
    echo "Bayar : $bayar" . PHP_EOL;
} else {
    echo "Harga : $harga" . PHP_EOL;
    $diskon = 0;
    $hasilDiskon = $harga * (0 / 100);
    echo "Total Diskon : $hasilDiskon" . PHP_EOL;
    echo "Diskon : {$diskon}%" . PHP_EOL;
    $bayar = $harga - $hasilDiskon;
    echo "Bayar : $bayar" . PHP_EOL;
}