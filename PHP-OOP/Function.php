<?php

require_once "Data/Person.php";

$name1 = new Person("Name 1","Sir");
$name1->name = "Name 1";
$name1->sayHello("Name");

$name2 = new Person("Name 2","Jawir");
$name2->name = "Name 2";
$name2->sayHello(null);

$name1->info();
$name2->info();