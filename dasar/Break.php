<?php

$a = 1;

while (true) {
    echo "Hello Break : " . $a . PHP_EOL;
    $a++;

        if ($a > 10 ) {
            break;
        }
}