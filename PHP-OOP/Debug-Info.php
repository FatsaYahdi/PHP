<?php
require_once "Data/Student.php";

$s1 = new Student();
$s1->id = "1";
$s1->name = "aw";
$s1->value = 100;
$s1->setSample("SAMPLE");

var_dump($s1);