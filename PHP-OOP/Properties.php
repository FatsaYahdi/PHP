<?php
require_once "Data/Person.php";

$person = new Person("Person 1","Jawir");

$person->name = "Name";
$person->address = "Address";
$person->Country = "Country";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->name" . PHP_EOL;

$person2 = new Person("Person 2",null);
$person2->name = "Name2";
$person2->address = "Address2";
$person2->Country = "Country2";

var_dump($person2);

// error 
// $person2->name = [];