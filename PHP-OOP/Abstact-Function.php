<?php
require_once "Data/Animal.php";
use Data\{Animal, Cat, Dog};
$cat = new Cat();
$cat->name = "Meong";
$cat->run();

$dog = new dog();
$dog->name = "Woof";
$dog->run();