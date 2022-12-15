<?php
// normal
$nilai = "D";
switch ($nilai) {
    case 'A':
        echo "Lulus" . PHP_EOL;
        break;
    case 'B':
    case 'C':
        echo "Hoki" . PHP_EOL;
        break;
    case 'D':
        echo "Tidak Lulus" . PHP_EOL;
        break;
    default:
        echo "Gagal" . PHP_EOL;
}

// alternatif

$nilai = "D";

switch ($nilai) :
    case 'A':
        echo "Lulus" . PHP_EOL;
        break;
    case 'B':
    case 'C':
        echo "Hoki" . PHP_EOL;
        break;
    case 'D':
        echo "Tidak Lulus" . PHP_EOL;
        break;
    default:
        echo "Gagal" . PHP_EOL;
        break;
endswitch;

// sk

$jurusan = '';
switch ($jurusan) {
    case 'PPLG':
        echo "Pengembangan Perangkat Lunak dan Gim";
        break;
    case 'TKJ':
        echo "Teknik Komputer Jaringan";
        break;
    case 'TO':
        echo "Teknik Otomotif";
        break;
    case "TM":
        echo "Teknik Mesin";
        break;
    default :
        echo "?";
}