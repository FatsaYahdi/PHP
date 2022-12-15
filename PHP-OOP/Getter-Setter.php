<?php
require_once "Data/Category.php";

$category = new Category();
$category->setName("Handphone");
$category->setExpensive(true);

echo "Name : $category->getName()" . PHP_EOL;
echo "Expensive : $category->isExpensive()" . PHP_EOL;
