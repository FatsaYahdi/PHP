<?php
// For, If, Perbandingan, Aritmatika

for ($a = 1; $a <= 100; $a++) { // for
    $i = $a ** 2; // aritmatika
    if ($a % 2 == 1) { // if & perbandingan
        echo "$a Adalah Bilangan Ganjil | $a dipangkat 2 adalah $i". PHP_EOL;
    } else {
        echo "$a Adalah Bilangan Genap | $a dipangkat 2 adalah $i". PHP_EOL;
    }
}  