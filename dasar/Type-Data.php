<?php
// echo  "Decimal : ";
// var_dump(1234);

// echo "Octal : ";
// var_dump(01234);

// echo "Hexa : ";
// var_dump(0x1A);

// echo "Biner : ";
// var_dump(0b111111);

// echo "Underline : ";
// var_dump(1_234_567);

// echo "Float : ";
// var_dump(1.234567); 

// $b1 = 10;
// $b2 = 10;
// $to = $b1 + $b2;
// echo "Total Penjumlahan $b1 + $b2 = $to";

// var_dump (null);
// var_dump (false);
// var_dump ("");
// var_dump ([]);
// var_dump (1);
// var_dump (1.1);

// echo "Real" . PHP_EOL;
// var_dump (true) . PHP_EOL;
// echo "Fake" . PHP_EOL;
// var_dump (false) . PHP_EOL;


/* 
$bilangan1 = 100;
$bilangan2 = 500;
if ($bilangan1 > $bilangan2) {
    echo "Nilai $bilangan1 lebih besar dari $bilangan2" . PHP_EOL;
    var_dump ($bilangan1 > $bilangan2);
} else {
    echo "Nilai $bilangan1 lebih kecil dari $bilangan2" . PHP_EOL;
    var_dump ($bilangan1 < $bilangan2);
} 


$sukses = true;
if ($sukses == true) {
    echo "SUSKES" . PHP_EOL;
    var_dump ($sukses);
} else {
    echo "Belum Sukses" . PHP_EOL;
    var_dump ($sukses);
} 
*/
$sch = "SMK Muhammadiyah 1 Sukoharjo";
echo 'Name : ';
echo 'Fatsa Yahdi';
echo "\n";

echo "Nama : ";
echo "Fatsa Yahdi \n";

echo "$sch\n";

echo "Kelas : \tXI PPLG 1" . PHP_EOL;

echo <<<EJI
line 1
line 2
line 3 \n
EJI;

echo <<<'wlee'
line 4
line 5
line 6
wlee;