<?php

$array = [
    "firstName" => 'fn',
    "middleName" => 'mn',
    "lastName" => 'ln'
];

$obj = (object)$array;

var_dump($obj);

echo "First Name : $obj->firstName\nMiddle Name : $obj->middleName\nLast Name$obj->lastName\n";

$alg = (array)$obj;
var_dump($alg);

require_once "Data/Person.php";
$person = new Person("a","b");
var_dump($person);

$ap = (array)$person;
var_dump($ap);