<?php
$nama       = $_REQUEST['nama'];
$jenis      = $_REQUEST['jk'];
$tanggal    = $_REQUEST['tgl'];
$kategori   = $_REQUEST['olah'];
$kelas      = $_REQUEST['kelas'];
$kemampuan  = $_REQUEST['kf'];
$metode     = $_REQUEST['pem'];
$diskon     = 0;

if ($kategori == "Sepak Bola") {
    $harga = 0;

        if ($kelas == "pemula") {
            $harga += 200000;
        } elseif ($kelas == "menengah") {
            $harga += 250000;
        } elseif ($kelas == "lanjutan") {
            $harga += 300000;
        }
    
 } elseif ($kategori == "Bulu Tangkis") {
    $harga = 0;

        if ($kelas == "pemula") {
            $harga += 150000;
            if ($jenis == "Perempuan") {
                $diskon += $harga * 0.1;
            }
        } elseif ($kelas == "menengah") {
            $harga += 200000;
            if ($jenis == "Perempuan") {
                $diskon += $harga * 0.1;
            }
        } elseif ($kelas == "lanjutan") {
            $harga += 250000;
            if ($jenis == "Perempuan") {
                $diskon += $harga * 0.1;
            }
        }
    
} elseif ($kategori == "Renang") {
    $harga = 0;

        if ($kelas == "pemula") {
            $harga += 180000;
        } elseif ($kelas == "menengah") {
            $harga += 220000;
        } elseif ($kelas == "lanjutan") {
            $harga += 270000;
        }
    
};

$total = $harga - $diskon;

if ($total > 500000) {
    $keputusan = 'Anda Berhasil Mendapatkan Kejutan Spesial Gratis!!!!!!!';
} else {
    $keputusan = 'Waduh Masih Kurang Buat Dapetin Kejutan Nya, Tambah Lagi Laaah Mana Maeeeen';
};  



echo "<center>";
echo "<h1> Form Data Diri </h1>";
echo "Nama : $nama<br>";
echo "Jenis Kelamin : $jenis<br>";
echo "Tanggal Lahir : $tanggal<br>";
echo "Kategori : $kategori<br>";
echo "Kelas : $kelas<br>";
echo "Kemampuan Fisik : $kemampuan<br>";
echo "Metode Pembayaran : $metode<br>";
echo "Harga : Rp. $harga<br>";
echo "Diskon : Rp. $diskon<br>";
echo "Total Harga : Rp. $total<br>";
echo $keputusan;
echo "</center>";
?>