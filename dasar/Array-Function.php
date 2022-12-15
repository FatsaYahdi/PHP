<?php

// array_keys()           Mengambil semua keys milik array
// array_values()         Mengambil semua values milik array
// array_map()            Mengubah semua data array dengan callback
// sort()                 Mengurutkan array
// rsort()                Mengurutkan array terbalik
// shuffle()              Mengubah posisi data di array secara random

$data = [1,2,3,4,5,6,7,8,9,10];

var_dump(array_map(fn($data) => $data * 2, $data));

rsort($data);
var_dump($data);
var_dump(array_keys($data));
var_dump(array_values($data));