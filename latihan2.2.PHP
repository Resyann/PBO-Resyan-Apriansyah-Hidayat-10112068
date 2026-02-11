<?php

class Belanja {

    public $namaPembeli;   // ada 6 properti dengan set value secara manual
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBarang;
    public $totalBayar;
    public $diskon;
    public static $pajak = 0.02;

    public function totalHarga(): int {
        $subtotal = $this->hargaBarang * $this->jumlahBarang;
        return $subtotal;
    }
}

$belanja1 = new Belanja();
$belanja1->namaPembeli = "Miftah";
$belanja1->namaBarang = "Sampo";
$belanja1->hargaBarang = 9000;
$belanja1->jumlahBarang = 2;
$belanja1->diskon = 0.1;

$belanja2 = new Belanja();
$belanja2->namaPembeli = "Satrio";
$belanja2->namaBarang = "mie ayam";
$belanja2->hargaBarang = 15000;
$belanja2->jumlahBarang = 5;
$belanja2->diskon = 0.2;

echo "<pre>";
echo "Nama Pembeli: " . $belanja1->namaPembeli . "\n";
echo "Subtotal: Rp " . $belanja1->totalHarga() . "\n\n";

echo "Nama Pembeli: " . $belanja2->namaPembeli . "\n";
echo "Subtotal: Rp " . $belanja2->totalHarga() . "\n";
echo "</pre>";

?>
