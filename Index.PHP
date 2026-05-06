<?php

// Memanggil file pendukung
require_once "tagihanListrik.php";
require_once "tagihanRepositori.php";

/**
 * Fungsi untuk memformat angka menjadi mata uang Rupiah
 */
function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}

// Inisialisasi Repository dan ambil data
$repo = new TagihanRepository();
$data = $repo->getAll();

// --- VIEW (OUTPUT) ---
echo "<h2>DATA TAGIHAN LISTRIK</h2>";

echo "<table border='1' cellpadding='6' cellspacing='0' style='border-collapse: collapse; width: 50%;'>";
echo "<tr style='background-color: #f2f2f2;'>
        <th>No</th>
        <th>Nama Pelanggan</th>
        <th>Pemakaian (KWH)</th>
        <th>Total Bayar</th>
        </tr>";

$no = 1;

foreach ($data as $d) {
    // Membuat objek dari class TagihanListrik
    $obj = new TagihanListrik();
    
    // Memasukkan data ke dalam objek
    $obj->setData($d["nama"], $d["kwh"]);

    echo "<tr>";
    echo "<td align='center'>" . $no++ . "</td>";
    echo "<td>" . $obj->getNama() . "</td>";
    echo "<td align='center'>" . $obj->getKwh() . "</td>";
    echo "<td>" . formatRupiah($obj->hitungTotal()) . "</td>";
    echo "</tr>";
}

echo "</table>";

?>