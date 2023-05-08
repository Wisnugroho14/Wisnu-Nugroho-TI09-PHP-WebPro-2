<?php
require_once 'koneksi.php';
?>
<?php
$sql = "SELECT * FROM produk";
$rs = $dbh->query($sql);
?>

<h1 class="mt-4">Produk</h1>
<ol class="breadcrumb mb-4">
  <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
  <li class="breadcrumb-item active">Produk</li>
</ol>
<div class="card mb-4">
  <div class="card-body">
    DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
    <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
    .
  </div>
</div>
<div class="card mb-4">
  <div class="card-header">
    <a class="btn btn-primary" href="index.php?hal=form_produk">Create Produk</a>
  </div>
  <div class="card-body">
    <table id="datatablesSimple">
      <thead>
        <tr>
          <th>No</th>
          <th>Kode</th>
          <th>Nama Produk</th>
          <th>Harga Jual</th>
          <th>Harga Beli</th>
          <th>Stok</th>
          <th>Min Stok</th>
          <th>Kategori Produk ID</th>
          <th>Action</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <th>No</th>
          <th>Kode</th>
          <th>Nama Produk</th>
          <th>Harga Jual</th>
          <th>Harga Beli</th>
          <th>Stok</th>
          <th>Min Stok</th>
          <th>Kategori Produk ID</th>
          <th>Action</th>
        </tr>
      </tfoot>

      <tbody>
        <?php
        $nomor  = 1;
        foreach ($rs as $row) {
        ?>
          <tr>
            <td><?= $nomor ?></td>
            <td><?= $row['kode'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['harga_jual'] ?></td>
            <td><?= $row['harga_beli'] ?></td>
            <td><?= $row['stok'] ?></td>
            <td><?= $row['min_stok'] ?></td>
            <td><?= $row['kategori_produk_id'] ?></td>
            <td>
              <a class="btn btn-success" href="index.php?hal=view_produk&id=<?= $row['id'] ?>">View</a>
              <a class="btn btn-warning" href="index.php?hal=form_produk&idedit=<?= $row['id'] ?>">Edit</a>
              <a class="btn btn-danger" href="delete_produk.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Produk <?= $row['nama'] ?>?')) {return false}">Delete</a>
            </td>
          </tr>
        <?php
          $nomor++;
        }
        ?>
      </tbody>
    </table>
  </div>
</div>

<!-- <a class="btn btn-success" href="form_pelanggan.php" role="button">Create Pelanggan</a> -->
<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">

</table>