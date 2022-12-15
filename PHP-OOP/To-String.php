<?php
require_once "Data/Student.php";

$s1 = new Student();
$s1->id = "1";
$s1->name = "Test";
$s1->value = 100;

$str = (string) $s1;
echo $str;