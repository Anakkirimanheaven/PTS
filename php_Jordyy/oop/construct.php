<?php

class contoh{

    public function __construct(){
        echo "Assalamualaikum Ukhti <bR>";
    }

    public function perkenalan(){
        echo "Nama Saya Fakcin (Fakhri Cina) <br>";
    }

    public function __destruct(){
        echo "Hallo Tan";
    }
}

$cetak = new contoh();

echo $cetak->perkenalan();
?>
