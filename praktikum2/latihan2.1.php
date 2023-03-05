<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Proses 1</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<form method="GET">
  <h1>Form Nilai Siswa</h1>
  <hr>
  <div class="form-group row p-3">
    <label for="text" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="text" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row p-3">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">Dasar-Dasar Pemrograman</option>
        <option value="BDI">Basis Data</option>
        <option value="WEB1">Pemrograman Web</option>
      </select>
    </div>
  </div>
  <div class="form-group row p-3">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row p-3">
    <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" placeholder="NIlai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row p-3">
    <label for="nilai_tugas" class="col-4 col-form-label">Nilai Praktikum</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Praktikum" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row p-3">
    <div class="offset-4 col-8">
      <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>

<?php
error_reporting(0);
$proses = $_GET ['proses'];
$nama_siswa = $_GET ['nama'];
$mata_kuliah = $_GET ['matkul'];
$nilai_uts = $_GET ['nilai_uts'];
$nilai_uas = $_GET ['nilai_uas'];
$nilai_tugas = $_GET ['nilai_tugas'];
?>

<?= $proses ?>
Nama Siswa : <?= $nama_siswa ?><br>
Matakuliah : <?= $mata_kuliah ?><br>
Nilai UTS : <?= $nilai_uts ?><br>
Nilai UAS : <?= $nilai_uas ?><br>
Nilai Tugas : <?= $nilai_tugas ?><br>
</body>
</html>