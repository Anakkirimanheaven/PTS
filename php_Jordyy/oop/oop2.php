<?php
class bangunDatar{
    public $count = "Menghitung Luas";

    public function segitiga(){
        $set = 0.5;
    $alas = 7;
    $tinggi = 8;
    $luas = $set * $alas * $tinggi;
    echo "$this->count Segitiga<br>";
    echo "Rumus : 1/2 x alas x tinggi <br>";
    echo "Alas : $alas <br>";
    echo "Tinggi : $tinggi <br>";
    echo "Luasnya : $luas <br>";
    }
    public function persegii(){
        $panjang = 5;
        $lebar = 5;
        $luas = $panjang * $lebar;
        echo "$this->count Persegi Panjang<br>";
        echo "Rumus : Panjang x Lebar <br>";
        echo "Panjang : $panjang <br>";     
        echo "Lebar : $lebar <br>";
        echo "Luasnya : $luas<br>";
    }
    public function persegi(){
        $Sisi = 5;
        $luas = $Sisi * $Sisi;
        echo "$this->count persegi<br>";
        echo "Rumus : Sisi x Sisi <br>";
        echo "Sisi : $Sisi<br>";
        echo "Luasnya : $luas<bR>";
    }
    public function lingkaran(){
        $phi = 3.14;
        $jari = 6;
        $luas = $phi * $jari * $jari;
        echo "$this->count Lingkaran<br>";
        echo "Rumus : phi x jari x jari<br>";
        echo "Phi : $phi <br>";
        echo "Jari-Jari : $jari<br>";
        echo "Luasnya : $luas<br>";
    }
}

$bangun = new bangunDatar();

echo $bangun -> persegi();
echo "<hr>";
echo $bangun -> persegii();
echo "<hr>";
echo $bangun -> segitiga();
echo "<hr>";
echo $bangun -> lingkaran();
?>