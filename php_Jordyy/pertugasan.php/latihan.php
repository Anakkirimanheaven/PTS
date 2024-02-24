<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <center>
   <h2>Daftar SMK</h2>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" placeholder="Masukan Nama"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tanggal" placeholder="Masukan Tanggal"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                <input type="radio" name="jk" value="laki-laki"> Laki-Laki 
                <input type="radio" name="jk" value="perempuan"> Perempuan
                </td>
            </tr>
            <tr>
                <td>Biaya Register</td>
                <td>:</td>
                <td><input type="number" name='biaya'></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                <select name="jurusan">
                            <option value="">.....</option>    
                            <option value="RPL">RPL</option>
                            <option value="TKRO">TKRO</option>
                            <option value="TBSM">TBSM</option>
                        </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="kirim" value="GOO!!"></td>
            </tr>
        </table>
    </form>
   </center>
</body>
</html>
<?php
if(isset($_POST['kirim'])){

$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$jenis = $_POST['jk'];
$biaya = $_POST['biaya'];
$jurus = $_POST['jurusan'];

if ($jurus == "RPL") {
    $bj = 2500000;
} elseif ($jurus == "TKRO") {
    $bj = 3000000;
}elseif ($jurus == "TBSM") {
    $bj = 3500000;
} else {
    echo "Pilih Jurusan Terebih Dahulu";
}

$total = $bj + $biaya;

echo "<center><br><br><br>";
echo "<h2>============> Struk Register <============</h2>";
echo "<table> <tr> <td>Nama</td> <td>:</td> <td>$nama</td> </tr>";
echo "<tr> <td>Tanggal Lahir</td> <td>:</td> <td>$tanggal</td> </tr>";
echo "<tr> <td>Jenis Kelamin</td> <td>:</td> <td>$jenis</td> </tr>";
echo "<tr> <td>Biaya Registrasi</td> <td>:</td> <td>$biaya</td> </tr>";
echo "<tr> <td>Jurusan</td> <td>:</td> <td>$jurus</td> </tr>";
echo "<tr> <td>Biaya Jurusan</td> <td>:</td> <td>$bj</td> </tr>";
echo "<tr> <td>Total Pembayaran</td> <td>:</td> <td>$total</td> </tr></table>";
echo "</center>";
}
?>