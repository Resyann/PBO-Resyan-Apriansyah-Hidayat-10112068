<?php
// ===============================
// TOKO PEGADAIAN SYARIAH
// ===============================

echo "<h3>TOKO PEGADAIAN SYARIAH</h3>";
echo "Jl Keadilan No 16<br>";
echo "Telp. 72353459<br><br>";

echo "<h4>Program Penghitung Besaran Angsuran Hutang</h4>";

// Data Input
$pinjaman = 1000000;        // Rp.1.000.000
$bunga = 10;                // 10%
$lamaAngsuran = 5;          // 5 bulan
$hariTerlambat = 40;        // 40 hari
$dendaPerHari = 0.15 / 100; // 0.15%

// Perhitungan
$totalPinjaman = $pinjaman + ($pinjaman * $bunga / 100);
$angsuranPerBulan = $totalPinjaman / $lamaAngsuran;

// Denda keterlambatan
$denda = $angsuranPerBulan * $dendaPerHari * $hariTerlambat;

// Total yang harus dibayar saat terlambat
$totalBayar = $angsuranPerBulan + $denda;

// Output
echo "Besaran Pinjaman : Rp. " . number_format($pinjaman,0,",",".") . "<br>";
echo "Masukan besar bunga (%) : $bunga%<br>";
echo "Total Pinjaman : Rp. " . number_format($totalPinjaman,0,",",".") . "<br>";
echo "Lama angsuran (bulan) : $lamaAngsuran<br>";
echo "Besaran angsuran : Rp. " . number_format($angsuranPerBulan,0,",",".") . "<br><br>";

echo "<b>Ketentuan denda keterlambatan 0.15% per hari dari angsuran</b><br><br>";

echo "Keterlambatan Angsuran (Hari) : $hariTerlambat<br>";
echo "Denda Keterlambatan : Rp. " . number_format($denda,0,",",".") . "<br>";
echo "Besaran Pembayaran : Rp. " . number_format($totalBayar,0,",",".") . "<br>";
?>
