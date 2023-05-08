<?php 
require_once 'koneksi.php';
$_id = $_GET['idedit'];
$sql = "SELECT * FROM kategori_produk WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
?>


<form method="POST" action="proses_kategori_produk.php">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Kategori Produk</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-anchor"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control"
        value="<?php echo $row['nama']; ?>">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" class="btn btn-primary" value="<?php if (isset($_GET['idedit'])) {
                                                                                        echo 'Update';
                                                                                      } else {
                                                                                        echo 'Simpan';
                                                                                      } ?>" />
    </div>
  </div>
  <?php if (isset($_GET['idedit'])){ ?>
    <input type="hidden" name="idedit" value="<?php echo $_GET['idedit']; ?>">
  <?php } ?>
</form>
