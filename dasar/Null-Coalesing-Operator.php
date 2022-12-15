<?php

// tanpa Null Coalesing Operator


$data = [];

if (isset($data['action'])) {
    $action = $data['action'];
} else {
    $action = 'Nothing';
}

echo $action . PHP_EOL;


// dengan Null Coalesing Operator

$data = [];
$action = $data['action'] ?? 'Nothing';

echo $action . PHP_EOL;