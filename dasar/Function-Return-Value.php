<?php

// 1

function sum(int $first, int $last) {
    return $first + $last;
}

$total = sum(10,10);
var_dump($total);

$total = sum(20,20);
var_dump($total);

// 2

function a(int $a) {
    if ($a >= 80) {
        return "A";
    } elseif ($a >= 70) {
        return "B";
    } elseif ($a >= 60) {
        return "C";
    } elseif ($a >= 50) {
        return "D";
    } else {
        return "E";
    }
}

echo(a(100));