<?php
class PersegiPanjang {
    public $panjang;
    public $lebar;

    function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    function luas() {
        return $this->panjang * $this->lebar;
    }

    function keliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
}
?>
