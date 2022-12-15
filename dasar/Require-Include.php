<?php

// Posisi Require dan Include
// Kode program PHP akan dibaca dari atas ke bawah, oleh karena itu pastikan posisi require dan 
// include sesuai dengan yang kita inginkan
// Misal jika sampai kita salah menempatkan posisi require dan include, bisa jadi kita malah 
// memanggil function yang belum ada 

// benar
include "MyFunction.php";
echo sayHello("jawa","jawir");

// salah
echo sayHello("jawa","jawir");
include "MyFunction.php";


/*
                                                require_once dan include_once

-                        Function require dan include akan selalu mengambil file yang kita inginkan

-   Jika kita beberapa kali menggunakan require dan include file yang sama, maka file tersebut akan berkali-kali pula kita ambil
    
-               Hal ini akan menjadi masalah jika misal dalam file yang kita ambil terdapat definisi function,
                            sehingga jika diambil berkali-kali akan menyebabkan error redeclare function

-                           Untungnya di PHP terdapat function require_once dan include_once, 
            function ini bisa mendeteksi jika kita sebelumnya pernah mengambil file yang sama, maka tidak akan diambil lagi

*/

// include berkali-kali
include "MyFunction.php";
include "MyFunction.php";
echo sayHello("jawa","jawir");

// include_once berkali-kali
include_once "MyFunction.php";
include_once "MyFunction.php";

echo sayHello("jawa","jawir");