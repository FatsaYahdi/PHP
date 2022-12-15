<?php
require_once "Data/Food.php";
require_once "Data/Animal.php";
require_once "Data/Animal-Shelter.php";

$catShelter = new \Data\CatShelter();
$cat = $catShelter->adopt("meong");
$cat->eat(new \Data\AnimalFood());

$dogShelter = new \Data\DogShelter();
$dog = $dogShelter->adopt("Woof");
$dog->eat(new \Data\Food());
