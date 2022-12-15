<?php
require_once "Data/Car.php";

use Data\{Avanza};

$car = new Avanza();
$car->drive();
echo $car->getTire();