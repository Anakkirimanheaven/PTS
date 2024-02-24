<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <center>
    <div class="card" style="width: 25rem;">
  <img src="jogo.jpg" class="card-img-top" alt="" style="width : 25rem;">
</div>
<h2>PENGGAJIHAN <BR> GURU/KARYAWAN YAYASAN ASSALAAM</h2>
<div class="card mt-5 ml-5 mr-5 mb-5 bg-primary text-left">
  <div class="card-header">
    <h3>Data Penggajihan</h3>
  </div>
  <div class="card-body">
  <form method="post" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">No</label>
    <input type="text" class="form-control" name="no" value="No">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nama</label>
    <input type="text" class="form-control" name="nama" value="Nama">
  </div>
  <div class="form-group">
    <label for="unit">Unit Pendidikan</label>
    <select class="form-control" name="up">
      <option value="Pilih Unit Pendidikan">Pilih Unit Pendidikan</option>
      <option value="TK">TK</option>
      <option value="SD">SD</option>
      <option value="SMP">SMP</option>
      <option value="SMA">SMA</option>
      <option value="SMK">SMK</option>
    </select>
  </div>
  <div class="form-group">
    <label for="tanggal">Tanggal Gaji </label>
    <input type="date" class="form-control" name="tg"> 
  </div>
  <h3>Gaji</h3>
  <div class="form-group">
    <label for="jabat">Jabatan</label>
    <select class="form-control" name="jabatan">
      <option value="">Pilih Jabatan</option>
      <option value="Kepsek">Kepsek</option>
      <option value="Wakasek">Wakasek</option>
      <option value="Guru">Guru</option>
      <option value="Karyawan">Karyawan</option>
    </select>
  </div>
  <div class="form-group">
    <label for="lama">Lama Kerja</label>
    <input type="number" class="form-control" name="lk">
  </div>
  <div class="form-group">
    <label for="stat">Status Kerja</label>
    <select class="form-control" name="sk">
      <option value="">Pilih Status Kerja</option>
      <option value="Tetap">Tetap</option>
      <option value="Kontrak">Kontrak</option>
    </select>
  </div>
  <h3>Potongan</h3>
  <div class="form-group">
  <label for="BPJS">BPJS</label>
    <input type="number" class="form-control" name="bpjs">
  </div>
  <div class="form-group">
  <label for="Pinjam">Pinjaman</label>
    <input type="number" class="form-control" name="pinjaman">
  </div>
  <div class="form-group">
  <label for="Tabung">Tabungan</label>
    <input type="number" class="form-control" name="tabungan">
  </div>
  <div class="form-group">
  <label for="Lain">Lainnya</label>
    <input type="number" class="form-control" name="lain">
  </div>
  <button type="submit" class="btn btn-info" name="proses">Proses</button>
</form>
  </div>
</div>
</center>
</body>
</html>

<?php
if(isset($_POST['proses'])){

    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $unit = $_POST['up'];
    $tanggal = $_POST['tg'];
    $jabat = $_POST['jabatan'];
    $lama = $_POST['lk'];
    $status = $_POST['sk'];
    $bpjs = $_POST['bpjs'];
    $pinjam = $_POST['pinjaman'];
    $tabung  = $_POST['tabungan'];
    $lain = $_POST['lain'];
    $gaji = 0;

    if ($jabat == "Kepsek") {
        $gaji += 5000000;
    } elseif ($jabat == "Wakasek") {
        $gaji += 4000000;
    } elseif ($jabat == "Guru") {
        $gaji += 3000000;
    } elseif ($jabat == "Karyawan") {
        $gaji += 2000000;
    } if ($status == "Tetap") {
        $bonus = 1000000;
    } else {
        $bonus =0;
    }
    

    $gajii =  ($gaji + $bonus) - $bpjs - $pinjam - $tabung - $lain;

    class hasil {
        public function data($no2,$nama2,$unit2,$tanggal2,$jabat2,$lama2,$status2,$bpjs2,$pinjam2,$tabung2,$lain2,$gaji2,$bonus2,$gajii2){
?>

    <center>
    <div class="card bg-success mb-67" style="max-width: 40rem;">
  <div class="card-header text-drag"><h3><i>Cieee Gajian</i></h3></div>
  <div class="card-body text-drag">
    <h5 class="card-title">Gaji Anda Sudah Masuk</h5><b>
    <table>

      <tr>
        <td>No</td>
        <td>:</td>
        <td><?php echo $no2 ?></td>
      </tr>
      <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?php echo $nama2 ?></td>
      </tr>
      <tr>
        <td>Unit Pendidikan</td>
        <td>:</td>
        <td><?php echo $unit2 ?></td>
      </tr>
      <tr>
        <td>Tanggal Gaji</td>
        <td>:</td>
        <td><?php echo $tanggal2 ?></td>
      </tr>
      <tr>
        <td>Jabatan</td>
        <td>:</td>
        <td><?php echo $jabat2 ?></td>
      </tr>
      <tr>
        <td>Gaji</td>
        <td>:</td>
        <td>Rp.<?php echo $gaji2 ?></td>
      </tr>
      <tr>
        <td>Lama Kerja</td>
        <td>:</td>
        <td><?php echo $lama2 ?></td>
      </tr>
      <tr>
        <td>Status Kerja</td>
        <td>:</td>
        <td><?php echo $status2 ?></td>
      </tr>
      <tr>
        <td>Bonus</td>
        <td>:</td>
        <td>Rp.<?php echo $bonus2 ?></td>
      </tr>
      <tr>
        <td>BPJS</td>
        <td>:</td>
        <td>Rp.<?php echo $bpjs2 ?></td>
      </tr>
      <tr>
        <td>Pinjaman</td>
        <td>:</td>
        <td>Rp.<?php echo $pinjam2 ?></td>
      </tr>
      <tr>
        <td>Tabungan</td>
        <td>:</td>
        <td>Rp.<?php echo $tabung2 ?></td>
      </tr>
      <tr>
        <td>Lainnya</td>
        <td>:</td>
        <td>Rp.<?php echo $lain2 ?></td>
      </tr>
      <tr>
        <td>Gaji Bersih</td>
        <td>:</td>
        <td>Rp.<?php echo $gajii2 ?></td>
      </tr>
      </table>
      </b>  
  </div>
  </div>
    </center>
<?php
        }
    }

    $cetak = new hasil();

    echo $cetak->data($no,$nama,$unit,$tanggal,$jabat,$lama,$status,$bpjs,$pinjam,$tabung,$lain,$gaji,$bonus,$gajii);

}