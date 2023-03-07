<?php
function urutanAngka($angka)
{
  $p = 1;
  for ($i = 1; $i <= $angka; $i++) {
    for ($j = 1; $j <= $i; $j++) {
      echo $p . " ";
      $p++;
    }
    echo "<br>";
  }
}
echo urutanAngka(5);
?>