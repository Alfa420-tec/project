<?php 
$x = 123;
$nama;


// memeriksa apakah $angka itu bilangan GANJIL
// bilangan yang jika dibagi 2 sisanya 1
function cek_ganjil_genap($angka, $nama )//parameter
{
if ($angka % 2 == 1) {
return "Hallo $nama, $angka adalah Bilangan GANJIL!";
  } else {
    return "Hallo $nama, $angka adalah bilangan GENAP!";
       }


}

echo cek_ganjil_genap(5 , "Muhammad"); //argument
echo "<br>";
echo cek_ganjil_genap(10 , "Alfa");
echo "<br>";
echo cek_ganjil_genap(100 , "Rizky");
?>