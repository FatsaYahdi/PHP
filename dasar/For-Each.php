<?php

// Tanpa For Each

$names = ['Satu','Dua','Niga'];

for ($i = 0; $i < count($names); $i++) { 
    echo "Hello $names[$i]" . PHP_EOL;
}

// Dengan For Each

$names = ['Satu','Dua','Niga'];

foreach ($names as $name) {
    echo "Hello $name" . PHP_EOL;
}

// For Each Dengan Value

$person = [
    'first_name' => 'satu',
    'middle_name' => 'dua',
    'last_name' => 'niga'
];

foreach ($person as $a => $b) {
    echo "$a : $b" . PHP_EOL;
}