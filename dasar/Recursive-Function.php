<?php

// factorial loop
function factorialLoop(int $value): int {
    $total = 1;
    for ($i = 1; $i < $value; $i++) { 
        $total *= $i;
    }
    return $total;
}

echo factorialLoop(6);

// loop

function loop(int $a) {
    if ($a == 0) {
        echo "Selesai" . PHP_EOL;
    } else {
        echo "Loop-{$a}" . PHP_EOL;
        loop($a - 1);
    }
}

loop(3000000);