<?php

require_once "Data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("Name");
var_dump($company);

$company->programmer = new BackendProgrammer("Name");
var_dump($company);

$company->programmer = new FrontendProgrammer("Name");
var_dump($company);

sayHelloProgrammer(new Programmer("Normal"));
sayHelloProgrammer(new BackendProgrammer("Back"));
sayHelloProgrammer(new FrontendProgrammer("Front"));