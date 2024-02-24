<?php

class manusia{

    public $nama = "Balmondd";

    private function tampilkan_nama(){
        echo "Nama Saya Rizqi <br>";
    }

    public function keluarkan(){
        $this->tampilkan_nama();
    }
}

$cetak = new manusia();
// menggil method
echo $cetak->keluarkan();
// manggil property
echo $cetak->nama;
?>