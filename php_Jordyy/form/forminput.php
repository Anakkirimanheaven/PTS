<!DOCTYPE html>
<html>
<head>
    <title>forminput</title>
</head>
<body>
    <center>
        <h2>Form Biodata Diri</h2>
        <!-- form -->
        <form method = "POST" action ="">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type='text' name ='nama'></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type='date' name ='tgl'></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><input type='radio' name ='jk' value="Laki-laki">Laki-laki</td> 
                    <td><input type='radio' name ='jk' value="Perempuan">Perempuan</td> 
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alm"></textarea></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <select name="agm">
                            <option value="">Pilih</option>
                            <option value="Islam">Islam</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Kong Hu Chu">Kong Hu Chu</option>
                            <option value="Hindu">Hindu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>:</td>
                    <td>
                        <select name="pt">
                            <option value="">Pilih</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="SMK">SMK</option>
                            <option value="Kuliah">Kuliah</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td><input type='radio' name ='stt' value='menikah'>Menikah</td>
                    <td><input type='radio' name ='stt' value='belum menikah'>Belum Menikah</td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td><input type='text' name ='hob'></td>
                </tr>
                <tr>
                    <td>Cita-cita</td>
                    <td>:</td>
                    <td><input type='text' name ='ct'></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type='submit' name ='simpan' value ='GOOOO!!!!!' ></td>
                </tr>
            </table>
    </center>
</body>
</html>
<?php
if(isset($_POST['simpan'])){
    $a = $_POST['nama'];
    $b = $_POST['tgl'];
    $c = $_POST['jk'];
    $d = $_POST['alm'];
    $e = $_POST['agm'];
    $f = $_POST['pt'];
    $g = $_POST['stt'];
    $h = $_POST['hob'];
    $i = $_POST['ct'];

    echo "=========== Biodata Diri ============== <br>";
    echo "=================================== <br>";
    echo "Nama = $a <br>";
    echo "Tanggal lahir = $b <br>";
    echo "Jenis Kelamin = $c <br>";
    echo "Alamat = $d <br>";
    echo "Agama = $e <br>";
    echo "Pendidikan Terakhir = $f <br>";
    echo "Status = $g <br>";
    echo "Hobi = $h <br>";
    echo "Cita-cita = $i <br>";
}
?>