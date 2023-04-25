<?php
  require_once"class_lingkaran.php";
  echo "NILAI PHI " . Lingkaran::PHI;

  $lingkaran1 = new lingkaran(10);
  $lingkaran2 = new lingkaran(4);

  echo "<br/>Luas Lingkaran 1 = ".$lingkaran1->getLuas();
  echo "<br/>Luas Lingkaran 2 = ".$lingkaran2->getLuas();

  echo "<br/>Keliling Lingkaran 1 = ".$lingkaran1->getKeliling();
  echo "<br/>Keliling Lingkaran 2 = ".$lingkaran2->getKeliling();
?>