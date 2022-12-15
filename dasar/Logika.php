<?php 
/* 
Fibonanci : 

$nt = 22;
$n1 = 0;
$n2 = 1;
$count = 0;
while ($count < $nt) {
    print $n1 . PHP_EOL;
    $nth = $n1 + $n2 ;
    $n1 = $n2;
    $n2 = $nth;
    $count += 1;
}

-----------------------------
*/
$a = [1,2,3,4,5,6,7,8,9,0];
var_dump ($a);
rsort($a);
var_dump ($a);
sort($a);
var_dump ($a);