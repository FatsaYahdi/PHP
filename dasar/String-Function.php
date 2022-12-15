<?php
// join() / implode()   Menggabungkan array menjadi string
// explode()            Memecah string menjadi array
// strtolower()         Mengubah string menjadi lowercase
// strtoupper()         Mengubah string menjadi uppercase
// substr()             Mengambil sebagian string
// trim()               Menghapus whitespace di depan dan belakang string


var_dump(join(",",[1,2,3,4,5]));
var_dump(explode(" ","Jawa Jawir Negro"));
var_dump(strtolower("JAWA JAWA JAWA"));
var_dump(strtoupper("jawir jawir jawir"));
var_dump(trim("         awok         "));
var_dump(substr("Jwa Jawir JAWA",0,4));