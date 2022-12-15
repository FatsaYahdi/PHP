<?php


// tanpa Ternary Operator
$gender = "as";

$hi = null;

if ($gender == "PRIA") {
    $hi = "Hi Bro";
} else {
    $hi = "Hi Woman";
}

echo $hi . PHP_EOL;


// dengan Ternary Operator
$gender = "PRIA";
$hi = $gender == "PRIA" ? "Hello Bro" : "Hello W";
echo $hi . PHP_EOL;