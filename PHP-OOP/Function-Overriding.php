<?php

require_once "Data/Manager.php";

$manager = new Manager();
$manager->name = "M Name";
$manager->sayHello("Name");

$vp = new VicePresident();
$vp->name = "VP Name";
$vp->sayHello("Name");