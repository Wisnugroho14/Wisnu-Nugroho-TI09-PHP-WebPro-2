<?php
require_once 'koneksi.php';
?>
<?php
$_id = $_GET['id'];
// select * from produk where id = $_id;
//$sql = "SELECT a.*,b.nama as jenis FROM produk a
//INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
$sql = "SELECT * FROM pesanan WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
//echo 'NAMA PRODUK ' . $row['nama'];
?>

<table class="table table-striped">
  <tbody>
  <tr>
    <td>ID</td>
    <td><?= $row['id'] ?></td>
  </tr>
  <tr>
    <td>Tanggal</td>
    <td><?= $row['tanggal'] ?></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td><?= $row['nama_pemesan'] ?></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td><?= $row['alamat_pemesan'] ?></td>
  </tr>
  <tr>
    <td>No.HP</td>
    <td><?= $row['no_hp'] ?></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><?= $row['email'] ?></td>
  </tr>
  <tr>
    <td>Jumlah Pesanan</td>
    <td><?= $row['jumlah_pesanan'] ?></td>
  </tr>
  <tr>
    <td>Deskripsi</td>
    <td><?= $row['deskripsi'] ?></td>
  </tr>
  <tr>
    <td>Produk ID</td>
    <td><?= $row['produk_id'] ?></td>
  </tr>
  </tbody>
</table>