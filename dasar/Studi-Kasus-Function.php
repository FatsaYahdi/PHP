<?php
function nilai_akhir($kt,$sk,$pr) {
    if ($kt >= 90 and $sk >= 90 and $pr >= 90) {
        for ($i=0; $i < 10; $i++) { 
            echo "<span style=\"background-color : green; \">Anda Lulus Dengan Nilai A</span><br><br>";
        }
    } elseif ($kt >= 80 and $sk >= 80 and $pr >= 80) {
        for ($i=0; $i < 10; $i++) { 
            echo "<span style=\"background-color : orange; \">Anda Lulus Dengan Nilai B</span><br><br>";
        }
    } elseif ($kt >= 75 and $sk >= 75 and $pr >= 75) {
        for ($i=0; $i < 10; $i++) { 
            echo "<span style=\"background-color : yellow; \">Anda Lulus Dengan Nilai C</span><br><br>";
        }
    } else {
        for ($i=0; $i < 10; $i++) { 
            echo "<span style=\"background-color : red; \">Anda Tidak Lulus</span><br><br>";
        }
    }
    
}
nilai_akhir(90,90,90);
nilai_akhir(80,90,90);
nilai_akhir(75,90,90);
nilai_akhir(50,90,90);

function jawir($kt, $sk, $pr) {
for ($i=0; $i <= 10; $i++) { 
    if ($kt >= 90 and $sk >= 90 and $pr >= 90) {

        echo "<span style=\"background-color : green; \">Anda Lulus Dengan Nilai A</span><br><br>";

    } elseif ($kt >= 80 and $sk >= 80 and $pr >= 80) 
    {
        echo "<span style=\"background-color : orange; \">Anda Lulus Dengan Nilai B</span><br><br>";
    } 
    elseif ($kt >= 75 and $sk >= 75 and $pr >= 75) 
    {
        echo "<span style=\"background-color : yellow; \">Anda Lulus Dengan Nilai C</span><br><br>";
    } 
    else {

        echo "<span style=\"background-color : red; \">Anda Tidak Lulus</span><br><br>";

    }
}
}
jawir(90,90,90);
jawir(80,90,90);
jawir(75,90,90);
jawir(50,90,90);

?>