<?php

/*

INFINITY LOOP

for (;;) {
    echo "Hello" . PHP_EOL;
} 
*/

/* loop Dengan Kondisi 

$counter = 1;

for (; $counter <= 10;) { 
    echo $counter . PHP_EOL;
    $counter++;
} 
*/

/* Loop Dengan Init Statement 

for ($counter = 1; $counter <= 10;) { 
    echo $counter . PHP_EOL;
    $counter++;
}

*/

/* Loop Dengan Post Statement 

for ($counter = 1; $counter <= 10; $counter++) { 
    echo $counter . PHP_EOL;
} 

*/

/* Alternate Syntax For Loop */

for ($counter = 1; $counter <= 10; $counter++) : 
    echo $counter . PHP_EOL;
endfor;