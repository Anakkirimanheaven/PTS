<?php
$harga = 1000;
?>
<?php
$nama_barang = "Kopi C++";
$harga = 4000;
$stok = 40;
?>

<!-- mengambil nilai dari variabel -->
<?php
//membuat variabel baru
$nama_barang = "Minyak Goreng";
$harga = 15000;
//menampilkan isi variabel
echo "Ibu membeli $nama_barang seharga Rp $harga<br>";

$judul =  "belajar php dari nol sampai expert";
echo 'Judul Artikel: ' .$judul;
?>

<!-- mengenal tipe data di php -->
<?php

// tipe data char (karakter)
$jenis_kelamin = 'L';

// tipe data string (teks)
$nama_lengkap = "Iqii Jordyy";

//tipe data integer
$umur = 20;

// tipe data float
$berat = 48.3;
$tinggi = 182.2;

//tipe data boolean
$menikah = false;

echo "Nama : $nama_lengkap<br>";
echo "Jenis Kelamin : $jenis_kelamin<br>";
echo "Umur : $umur tahun<br>";
echo "Berat Badan : $berat kg<br>";
echo "Tinggi Badan : $tinggi cm<br>";
if ($menikah) {
    echo "Sudah Menikah";
} else {
    echo "Belum Menikah";
}
?>