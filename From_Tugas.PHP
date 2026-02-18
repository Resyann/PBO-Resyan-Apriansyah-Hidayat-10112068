<?php
$pinjaman = "";
$bunga = "";
$lamaAngsuran = "";
$hariTerlambat = "";

if(isset($_POST['hitung'])){

    $pinjaman = $_POST['pinjaman'];
    $bunga = $_POST['bunga'];
    $lamaAngsuran = $_POST['lamaAngsuran'];
    $hariTerlambat = $_POST['hariTerlambat'];

    $dendaPerHari = 0.15 / 100;

    $totalPinjaman = $pinjaman + ($pinjaman * $bunga / 100);
    $angsuranPerBulan = $totalPinjaman / $lamaAngsuran;
    $denda = $angsuranPerBulan * $dendaPerHari * $hariTerlambat;
    $totalBayar = $angsuranPerBulan + $denda;
}
?>


<html>
<head>
    <title>Pegadaian Syariah</title>
</head>
<body>

<h3>TOKO PEGADAIAN SYARIAH</h3>
Jl Keadilan No 16 <br>
Telp. 72353459
<br><br>

<h4>Program Penghitung Besaran Angsuran Hutang</h4>

<form method="POST">
    Besaran Pinjaman (Rp): <br>
    <input type="number" name="pinjaman" required><br><br>

    Masukan Besar Bunga (%): <br>
    <input type="number" name="bunga" required><br><br>

    Lama Angsuran (bulan): <br>
    <input type="number" name="lamaAngsuran" required><br><br>

    Keterlambatan (hari): <br>
    <input type="number" name="hariTerlambat" required><br><br>

    <input type="submit" name="hitung" value="Hitung">
</form>

<?php if(isset($_POST['hitung'])){ ?>

<hr>
<b>Hasil Perhitungan</b><br><br>

Total Pinjaman : Rp <?php echo number_format($totalPinjaman,0,",","."); ?><br>
Besaran Angsuran : Rp <?php echo number_format($angsuranPerBulan,0,",","."); ?><br><br>

<b>Ketentuan denda keterlambatan 0.15% per hari dari angsuran</b><br><br>

Denda Keterlambatan : Rp <?php echo number_format($denda,0,",","."); ?><br>
Total Pembayaran : Rp <?php echo number_format($totalBayar,0,",","."); ?><br>

<?php } ?>

</body>
</html>
