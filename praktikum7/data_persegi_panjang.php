<?php
require_once "class_persegi_panjang.php";
$persegi_panjang1 = new PersegiPanjang(5, 3);
$luas1 = $persegi_panjang1->luas();
$keliling1 = $persegi_panjang1->keliling();

echo "Panjang Persegi Panjang : " . $persegi_panjang1->panjang . "<br>";
echo "Lebar Persegi Panjang : " . $persegi_panjang1->lebar . "<br>";
echo "Maka Luas Persegi Panjang adalah : " . $luas1 . "<br>";
echo "Dan Keliling Persegi Panjang adalah : " . $keliling1 . "<br>";
?>