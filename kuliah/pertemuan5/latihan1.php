<?php 
// ARRAY
// Membuat Array
$hari = array('senin', 'selasa', 'rabu', 'kamis');
$bulan = ['januari', 'februari', 'maret'];

$myarray = ['Alfa', 19, false];
$binatang = ['🐈', '🐇', '🐒', '🐄'];


//mencetak array
var_dump($hari);
echo"<hr>";
print_r($bulan);
echo"<hr>";
var_dump($myarray);
echo"<hr>";
var_dump($binatang);
echo"<hr>";


//manipulasi array
//menambah elemen di akhir menggunakan index
$hari[] = 'kamis';
$hari[]= "jum'at";
print_r($hari);
echo "<hr>";
//menambah elemen di akhir menggunakan push array
array_push($bulan, 'april', 'mei', 'juni');
print_r($bulan);
echo "<hr>";
//menambahkan elemen di awal menggunakan array_unshift
array_unshift($binatang, '🐍');
print_r($binatang);
echo "<hr>";


?>