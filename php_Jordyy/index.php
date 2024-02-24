<?php
    $nama = "Jordie";
    $umur = 17;
    $nilai = 99.99;
    $status = true;

    echo "Nama : $nama<br>";
    echo 'Umur : '. $umur . '<br>';
    printf ("Nilai : %.2f <br>", $nilai);
    if ($status) {
        echo "Status siswa aktif";
    } else {
        echo "Status siswa tidak aktif";
    }
?>