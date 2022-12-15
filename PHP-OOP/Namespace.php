<?php
require_once "Data/Conflict.php";
require_once "Data/Helper.php";

$con1 = new Data\One\Conflict();
$con2 = new Data\Two\Conflict();

echo Helper\APP() . PHP_EOL;

Helper\helpMe();