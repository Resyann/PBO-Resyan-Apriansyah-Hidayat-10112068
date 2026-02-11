<?php

class Belanja {

    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBarang;
    public $diskon;
    public $uangDibayar;

    public static $pajak = 0.02; // 2%

    // Hitung subtotal
    public function subtotal() {
        return $this->hargaBarang * $this->jumlahBarang;
    }

    // Hitung diskon
    public function hitungDiskon() {
        return $this->subtotal() * $this->diskon;
    }

    // Hitung pajak
    public function hitungPajak() {
        return ($this->subtotal() - $this->hitungDiskon()) * self::$pajak;
    }

    // Total akhir = (subtotal - diskon) + pajak
    public function totalAkhir() {
        return ($this->subtotal() - $this->hitungDiskon()) + $this->hitungPajak();
    }

    // Hitung kembalian
    public function hitungKembalian() {
        return $this->uangDibayar - $this->totalAkhir();
    }
}


// =======================
// DATA PEMBELI
// =======================

$belanja1 = new Belanja();
$belanja1->namaPembeli = "Budi";
$belanja1->namaBarang = "Gula 1 Kg";
$belanja1->hargaBarang = 65000;
$belanja1->jumlahBarang = 2;
$belanja1->diskon = 0.1; // 10%
$belanja1->uangDibayar = 130000;


// =======================
// OUTPUT
// =======================

echo "<pre>";
echo "======== WARUNG A =======\n";
echo "Kasir   : SISTEM\n";
echo "Pembeli : " . $belanja1->namaPembeli . "\n";
echo "------------------------------------------\n";
echo $belanja1->namaBarang . " x " . $belanja1->jumlahBarang . " @ Rp " . number_format($belanja1->hargaBarang,0,",",".") . "\n";

echo "SUBTOTAL   : Rp " . number_format($belanja1->subtotal(),0,",",".") . "\n";
echo "DISKON     : Rp " . number_format($belanja1->hitungDiskon(),0,",",".") . "\n";
echo "PAJAK 2%   : Rp " . number_format($belanja1->hitungPajak(),0,",",".") . "\n";
echo "TOTAL BAYAR: Rp " . number_format($belanja1->totalAkhir(),0,",",".") . "\n";
echo "UANG BAYAR : Rp " . number_format($belanja1->uangDibayar,0,",",".") . "\n";
echo "KEMBALIAN  : Rp " . number_format($belanja1->hitungKembalian(),0,",",".") . "\n";
echo "</pre>";

?>
