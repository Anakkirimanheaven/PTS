<?php
//buat class
class Manusia{

    //buat property / atribut
    public $nama = "Jordie";
    public $namaa = "Aceung";
    public $jenis_kelamin;

    //buat method / function
    public function makan(){
        echo "$this->nama Suka Makan Daging Ayam";
    }
    public function minum(){
        echo "$this->namaa Suka Minum Kopikap";
    }
    public function segitiga(){
        $set = 0.5;
    $alas = 7;
    $tinggi = 8;
    $luas = $set * $alas * $tinggi;
    echo "<h3>Menghitung Luas Segitiga</h3>";
    echo "Rumus : 1/2 x alas x tinggi <br>";
    echo "Alas : $alas <br>";
    echo "Tinggi : $tinggi <br>";
    echo "Luasnya : $luas <br>";
    }
    public function persegii(){
        $panjang = 5;
        $lebar = 5;
        $luas = $panjang * $lebar;
        echo "<h3>Menghitung Luas Persegi Panjang</h3>";
        echo "Rumus : Panjang x Lebar <br>";
        echo "Panjang : $panjang <br>";
        echo "Lebar : $lebar <br>";
        echo "Luasnya : $luas<br>";
    }
    public function persegi(){
        $Sisi = 5;
        $luas = $Sisi * $Sisi;
        echo "<h3>Menghitung Luas Persegi</h3>";
        echo "Rumus : Sisi x Sisi <br>";
        echo "Sisi : $Sisi<br>";
        echo "Luasnya : $luas<bR>";
    }
    public function lingkaran(){
        $phi = 3.14;
        $jari = 6;
        $luas = $phi * $jari * $jari;
        echo "<h3>Menghitung luas Lingkaran</h3>";
        echo "Rumus : phi x jari x jari<br>";
        echo "Phi : $phi <br>";
        echo "Jari-Jari : $jari<br>";
        echo "Luasnya : $luas<br>";
    }
}

//buat object
$cetak = new Manusia();

echo $cetak -> makan();
echo "<br>";
echo $cetak -> minum();
echo "<hr>";
echo $cetak -> persegi();
echo "<hr>";
echo $cetak -> persegii();
echo "<hr>";
echo $cetak -> segitiga();
echo "<hr>";
echo $cetak -> lingkaran();
?>