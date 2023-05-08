<?php
require_once 'koneksi.php';
?>
<?php
$_id = $_GET['id'];
// select * from produk where id = $_id;
//$sql = "SELECT a.*,b.nama as jenis FROM produk a
//INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
$sql = "SELECT * FROM produk WHERE id=?";
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
    <td>Kode</td>
    <td><?= $row['kode'] ?></td>
  </tr>
  <tr>
    <td>Nama Produk</td>
    <td><?= $row['nama'] ?></td>
  </tr>
  <tr>
    <td>Harga jual</td>
    <td><?= $row['harga_jual'] ?></td>
  </tr>
  <tr>
    <td>Harga beli</td>
    <td><?= $row['harga_beli'] ?></td>
  </tr>
  <tr>
    <td>Stok</td>
    <td><?= $row['stok'] ?></td>
  </tr>
  <tr>
    <td>Min stok</td>
    <td><?= $row['min_stok'] ?></td>
  </tr>
  <tr>
    <td>Deskripsi</td>
    <td><?= $row['deskripsi'] ?></td>
  </tr>
  <tr>
    <td>Kategori produk id</td>
    <td><?= $row['kategori_produk_id'] ?></td>
  </tr>
  </tbody>
</table>