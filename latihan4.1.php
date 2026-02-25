<?php

// ini adalah function
function formatRupiah($angka): string {
    return "Rp " . number_format(num: $angka, decimals: 0, decimal_separator: ',', thousands_separator: '.');
}

// ini adalah class
class Belanja {

    public $namaPembeli;
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBeli;

    // ini adalah method yang ...
    public function hitungSubtotal(): float|int {
        return $this->hargaBarang * $this->jumlahBeli;
    }

    public function hitungTotalDenganDiskon($persenDiskon): float|int {
        $subtotal = $this->hitungSubtotal();
        $diskon = ($persenDiskon / 100) * $subtotal;
        return $subtotal - $diskon;
    }
}
//buat array tentang pembelian
$data = [
    'namaPembeli' => 'Miftah',
    'namaBarang' => 'Mie Ayam',
    'HargaBarang' => 12000,
    'jumlahBeli' => 12

];
//instansiasi objek belanja dari claas Belanja
$belanja = new belanja();
$belanja->namaPembeli = $data['namaPembeli'];
$belanja->namaBarang = $data['namaBarang'];
$belanaja->hargaBarang = $data['hargaBarang'];
$belanaja->jumlahBeli = $data['jumlahBeli'];

//output

echo "<2 STRUK BELANAJA WARUNG A<h2>";
echo "Pembeli: " . $belanja->namaPembeli . "<br>";
echo "Barang: " . $belanja->namaBarang . "<br>";
echo "Subtotal; " . formatRupiah($belanja->hitungSubtotal()) . "<br>";
echo "Total (Diskon 10%): " . formatRupiah($belanja->hitungTotalDenganDiskon(10)) . "<br>";
?>