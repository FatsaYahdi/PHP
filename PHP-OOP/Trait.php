<?php
require_once "Data/Say-Goodbye.php";

use Data\Traits\{Person, SayHello, SayGoodbye};

$person = new Person();
$person->goodBye("awok");
$person->hello("awok");
$person->name = "name";
var_dump($person);

$person->run();