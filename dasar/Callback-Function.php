<?php
function hello(string $name, callable $filter) {
    $final = call_user_func($filter,$name);
    echo "Hello $final" . PHP_EOL;
}

hello("jawir", function($name) { return strtoupper($name); });
hello("jawir", fn($name) => strtoupper($name));
hello("jawir","strtoupper");
hello("JAWIR","strtolower");