<?php

class Belanja {

    public $namaPembeli = "Miftah";   // ada 6 properti dengan set value secara langsung
    public $namaBarang  = "Sampo";
    public $hargaBarang = 9000;
    public $jumlahBarang = 2;
    public $totalBayar;
    public $diskon = 0.1;

    public static $pajak = 0.02;

    public function totalHarga() : float|int {
        $subtotal = $this->hargaBarang * $this->jumlahBarang;

        return $subtotal;
    }
}



?>
