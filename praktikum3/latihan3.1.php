<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Registrasi</title>
</head>

<body>
  <?php
  $ar_prodi = ["SI" => "Sistem Informasi", "TI" => "Teknik Informatika", "BD" => "Bisnis Digital"];
  $ar_skill = ["HTML" => 10, "CSS" => 10, "JAVASCRIPT" => 20, "RWD Bootsrap" => 20, "PHP" => 30, "Pyhton" => 30, "Java" => 50];
  $ar_domisili = ['Jakarta', 'Depok', 'Bogor', 'Tanggerang', 'Bekasi', 'Lainnya'];
  ?>
  <fieldset style="background-color: aquamarine;">
    <legend>Form Registrasi IT Club Data Science</legend>
    <table>
      <tr>
        <th>Form Registrasi</th>
      </tr>
      <tr>
        <th>
          <form method="POST">
      <tr>
        <td>
          Nim :
        </td>
        <td>
          <input type="text" name="nim" value="" size="30">
        </td>
      </tr>
      <tr>
        <td>
          Nama :
        </td>
        <td><input type="text" name="nama" value="" size="30">
        </td>
      </tr>
      <tr>
        <td>
          Jenis Kelamin :
        </td>
        <td>
          <input type="radio" name="jk" value="L" size="30">
          Laki-Laki
          <input type="radio" name="jk" value="P" size="30">
          Perempuan
        </td>
      </tr>
      <tr>
        <td>
          Program Studi :
        </td>
        <td>
          <select name="prodi">
            <?php
            foreach ($ar_prodi as $prodi => $p) { ?>
              <option value="<?= $prodi ?>"> <?= $p ?> </option>
            <?php } ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Skill Web & Programming : </td>
        <td>
          <?php foreach ($ar_skill as $skil => $value) : ?>
            <input type="checkbox" name="skill[<?= $skil ?>]" value="<?= $value ?>"> <?= $skil ?>
          <?php endforeach; ?>
        </td>
      </tr>
      <tr>
        <td>
          Domisili :
        </td>
        <td>
          <select name="domisili">
            <?php
            foreach ($ar_domisili as $domisili) { ?>
              <option value="<?= $domisili ?>"> <?= $domisili ?></option>
            <?php } ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Email : </td>
        <td><input type="email" name="email" value="" size="30"></td>
      </tr>
      <tr>
        <td>
          <button name="proses">Simpan</button>
        </td>
      </tr>
      </form>
      </th>
      </tr>
    </table>
  </fieldset>
  <hr>

  <?php
  error_reporting(0);
  if (isset($_POST['proses'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $skill = $_POST['skill'];
    $domisili = $_POST['domisili'];
    $email = $_POST['email'];
    $total_skor = 0;
  }
  ?>

  <?= "<br> NIM : $nim" ?>
  <?= "<br> Nama : $nama" ?>
  <?= "<br> Jenis Kelamin : $jk" ?>
  <?= "<br> Program Studi : $prodi" ?>
  <?= "<br> Skill : " . implode(", ", array_keys($skill)) ?>


  <?php
  function skor_skill($total)
  {
    if ($total >= 100 && $total <= 150) {
      return "Sangat Baik";
    } elseif ($total >= 60 && $total <= 100) {
      return "Baik";
    } elseif ($total >= 40 && $total <= 60) {
      return "Cukup";
    } elseif ($total >= 0 && $total <= 40) {
      return "Kurang";
    } elseif ($total < 0) {
      return "Tidak memadai";
    } else {
      return "Tidak valid";
    }
  }
  ?>
  <?php
  $total = array_sum($skill);
  $kategori_skill = skor_skill($total);
  $email = isset($email) ? $email : '';
  ?>

  <?= "<br> Skor Skill: $total" ?>
  <?= "<br> Kategori Skill: $kategori_skill" ?>
  <?= "<br> Email: $email" ?>
  <?= "<br> Tempat Domisili : $domisili" ?>
</body>

</html>