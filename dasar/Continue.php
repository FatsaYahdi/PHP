<?php
for ($i = 0; $i <= 100 ; $i++) { 
    if ($i % 2 == 0) {
        continue;
    } 
    echo "Hello Continue : " . $i . PHP_EOL;
}