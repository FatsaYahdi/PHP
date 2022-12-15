<?php
require_once "Data\Product.php";

$pro = new Product("Apel", 20000);

// error
echo $pro->name . PHP_EOL;
echo $pro->price . PHP_EOL;

// g eror
echo $pro->getName() . PHP_EOL;
echo $pro->getPrice() . PHP_EOL;

$dum = new ProductDummy("Dummy",100);
$dum->info();