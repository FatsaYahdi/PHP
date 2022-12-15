<?php

function foo() {
    echo "FOO" . PHP_EOL;
}

function bar() {
    echo "BAR" . PHP_EOL;
}

$fn = "FoO";
$fn();

$fn = "bar";
$fn();

// Penggunaan

function hello(string $name, $filter) {
    $final = $filter($name);
    echo "Hello $final" . PHP_EOL;
}

hello("JAWA","strtolower");
hello("jawa","strtoupper");