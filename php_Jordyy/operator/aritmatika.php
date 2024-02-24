<?php
    $gaji = 1000000;
    $pajak = 0.025; //pajak 2.5%

    $thp = $gaji - ($gaji * $pajak);
echo "Gaji Sebelum di potong pajak :  <b>$gaji</b><br>";
echo "Gaji Bersih : <b>Rp.$thp<b/><br>";
?>