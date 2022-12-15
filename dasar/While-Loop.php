<?php
// // Normal
// $i = 11;

// while ($i <= 10) {
//     echo $i . PHP_EOL;
//     $i++;
// }

// // Alternate Syntax
// $i = 11;

// while ($i <= 10) :
//     echo $i . PHP_EOL;
//     $i++;
// endwhile;
$a = 1;
 while ($a <= 100) {
    $b = $a ** 2;
    if ($a % 2 == 0) {
        echo "$a Adalah bilangan Genap | $a pangkat 2 = $b" . PHP_EOL;
    } else {
        echo "$a Adalah bilangan Ganjil | $a pangkat 2 = $b" . PHP_EOL;
    }
    $a++;
 }