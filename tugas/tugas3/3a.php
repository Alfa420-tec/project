<?php

echo "<h4>Menghitung Luas Lingkaran</h4>";
function hitungLuasLingkaran($r)
{
  echo "Jari-Jari = $r cm. <br>";
  echo "Luas lingkaran = " . (3.14 * $r * $r) . " cm <sup>2</sup>";
}

hitungLuasLingkaran(10);
echo "<hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4>";
function hitungKelilingLingkaran($r)
{
  echo "Jari-jari = $r cm. <br>";
  echo "Keliling lingkaran = " . (2 * 3.14 * $r) . " cm";
}

hitungKelilingLingkaran(20);
echo "<hr>";

?>