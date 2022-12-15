<?php

require_once "Data\Conflict.php";
require_once "Data\Helper.php";

// use ??? as ???
use Data\One\Conflict as c1;
use Data\Two\Conflict as c2;
use function Helper\helpMe as help;
use const Helper\APP as App;

$con1 = new c1();
$con2 = new c2();
help();
echo App . PHP_EOL;