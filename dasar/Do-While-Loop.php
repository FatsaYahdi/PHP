<?php

$a = 1;

do {
    $b = $a ** 2;
    if ($a % 2 == 0) {
        echo "$a Genap | $a Pangkat 2 : $b" . PHP_EOL;
    } else {
        echo "$a Ganjil | $a Pangkat 2 : $b" . PHP_EOL;
    }
    $a++;
} while ($a <= 100);


$a = 1;

do{
    $b = $a ** 2;
    if ($a % 2 == 0) {
        echo "$a Genap | $a Pangkat 2 : $b" . PHP_EOL;
    } else {
        echo "$a Ganjil | $a Pangkat 2 : $b" . PHP_EOL;
    }
    $a++;
} while ($a <= 100);