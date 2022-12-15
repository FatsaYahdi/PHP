<?php

$keterampilan = 80;
$sikap = 60;


// if ($keterampilan >= 75 && $sikap >= 75) {
//     echo "Lulus" . PHP_EOL;
// } else {
//     echo "Tidak Lulus" . PHP_EOL;
// }

if ($keterampilan >= 90 && $sikap >= 90) {
    echo "A" . PHP_EOL;
} else if ($keterampilan >= 80 && $sikap >= 80) {
    echo "B" . PHP_EOL;
} else if ($keterampilan >= 75 && $sikap >= 75) {
    echo "C" . PHP_EOL;
} else {
    echo "D" . PHP_EOL;
}