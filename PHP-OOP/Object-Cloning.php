<?php
require_once "Data/Student.php";

$s1 = new Student();
$s1->id = "1";
$s1->name = "ank";
$s1->value = 100;
$s1->setSample("XXX");
var_dump($s1);

$s2 = clone $s1;
var_dump($s2);

// manual
// $s2 = new Student();
// $s2->id = $s1->id;
// $s2->name = $s1->name;
// $s2->value = $s1->value;

// $s1 => clone $s1 => $s2->__clone()
