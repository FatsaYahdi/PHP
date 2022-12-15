<?php
$fn = "satu";
$ln = "dua";

$hello = function () use ($fn, $ln) {
    echo "Hello $fn $ln" . PHP_EOL;
};

$hello();