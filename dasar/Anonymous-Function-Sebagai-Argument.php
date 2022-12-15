<?php

function gbye(string $name, $filter) {
    $final = $filter($name);
    echo "Hello $final" . PHP_EOL;
}

gbye("Jawa",function (string $name) {
    return strtoupper($name);
}) ;