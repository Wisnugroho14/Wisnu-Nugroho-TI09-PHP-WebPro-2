<?php 
require_once 'dbkoneksi.php';
?>
            
<form method="POST" action="proses_vendor.php">
<div class="form-group row mb-2">
        <label for="nomor" class="col-4 col-form-label">Nomor Kode</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
                </div>
                <input id="nomor" name="nomor" type="text" class="form-control" value="">
            </div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="nama" class="col-4 col-form-label">Nama Vendor</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
                </div>
                <input id="nama" name="nama" type="text" class="form-control" value="">
            </div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="kota" class="col-4 col-form-label">Kota</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
                </div>
                <input id="kota" name="kota" type="text" class="form-control" value="">
            </div>
        </div>
    </div>
    <div class="form-group row mb-2">
        <label for="kontak" class="col-4 col-form-label">Kontak</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <!-- <div class="input-group-text">
                        <i class="fa fa-anchor"></i>
                    </div> -->
                </div>
                <input id="kontak" name="kontak" type="text" class="form-control" value="">
            </div>
        </div>
  </div>
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan"/>
      <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Update"/>
    </div>
  </div>
  <?php if (isset($_GET['idedit'])){ ?>
    <input type="hidden" name="idedit" value="<?php echo $_GET['idedit']; ?>">
  <?php } ?>
</form>
