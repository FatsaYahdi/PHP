<?php
require_once "Data/Student.php";

$s1 = new Student();
$s1->id = "1";
$s1->name = "Test";
$s1->value = 100;

$s2 = new Student();
$s2->id = "1";
$s2->name = "Test";
$s2->value = 100;

var_dump($s1 == $s2); // true
var_dump($s1 === $s2); // false
var_dump($s1 === $s1); // true