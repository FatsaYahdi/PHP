<?php

require_once "Data\Conflict.php";
require_once "Data\Helper.php";

// use 
use Data\One\Conflict;
use function Helper\helpMe;
use const Helper\APP;


$con1 = new Conflict();
$con2 = new Data\Two\Conflict();

helpMe();

echo APP . PHP_EOL;