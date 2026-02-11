<?php

class BelanjaWarung {

    public $kasir;
    public $pembeli;
    public $namaBarang;
    public $harga;
    public $jumlah;
    public $diskon;
    public $uangDibayar;

    public static $pajak = 0.02; // 2%

    public function __construct($kasir, $pembeli, $barang, $harga, $jumlah, $diskon, $uangDibayar) {
        $this->kasir = $kasir;
        $this->pembeli = $pembeli;
        $this->namaBarang = $barang;
        $this->harga = $harga;
        $this->jumlah = $jumlah;
        $this->diskon = $diskon;
        $this->uangDibayar = $uangDibayar;
    }

    // Hitung subtotal
    public function hitungSubtotal() {
        return $this->harga * $this->jumlah;
    }

    // Hitung pajak
    public function hitungPajak() {
        return ($this->hitungSubtotal() - $this->diskon) * self::$pajak;
    }

    // Hitung total akhir
    public function hitungTotalAkhir() {
        return ($this->hitungSubtotal() - $this->diskon) + $this->hitungPajak();
    }

    // Method baru hitung kembalian
    public function hitungKembalian() {
        return $this->uangDibayar - $this->hitungTotalAkhir();
    }

    // Tampilkan struk
    public function tampilkanStruk() {

        echo "============ WARUNG Satrio ============<br>";
        echo "Kasir    : " . $this->kasir . "<br>";
        echo "Pembeli  : " . $this->pembeli . "<br>";
        echo "----------------------------------<br>";
        echo $this->namaBarang . " x " . $this->jumlah . 
             "  Rp " . number_format($this->harga,0,",",".") . "<br>";
        echo "----------------------------------<br>";
        echo "SUBTOTAL     : Rp " . number_format($this->hitungSubtotal(),0,",",".") . "<br>";
        echo "DISKON       : Rp " . number_format($this->diskon,0,",",".") . "<br>";
        echo "PAJAK 2%     : Rp " . number_format($this->hitungPajak(),0,",",".") . "<br>";
        echo "TOTAL BAYAR  : Rp " . number_format($this->hitungTotalAkhir(),0,",",".") . "<br>";
        echo "UANG BAYAR   : Rp " . number_format($this->uangDibayar,0,",",".") . "<br>";
        echo "KEMBALIAN    : Rp " . number_format($this->hitungKembalian(),0,",",".") . "<br>";
        echo "==================================<br>";
    }
}


// Contoh penggunaan
$belanja = new BelanjaWarung(
    "SISTEM",
    "Maul",
    "Anggur merah ",
    65000,
    2,
    13000,
    130000
);

$belanja->tampilkanStruk();

?>
