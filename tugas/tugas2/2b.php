<?php


$baris = 10;
// jadi jika variable angka itu kurang dari jumlah baris yang mana itu adalah 10
// angka akan bertambah 1 diikuti jg oleh kolom dibawahny bgitu kurang lebi
for ($angka = 1; $angka <= $baris; $angka++) {
    for ($kolom = 1; $kolom <= $angka; $kolom++) {
        echo "$kolom ";
    }
    echo "<br>";
}