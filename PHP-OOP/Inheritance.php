<?php
require_once "Data/Manager.php";

$manager = new Manager();
$manager->name = "Manager";
$manager->sayHello("Mager");

$vp = new VicePresident();
$vp->name = "Vice";
$manager->sayHello("VP");