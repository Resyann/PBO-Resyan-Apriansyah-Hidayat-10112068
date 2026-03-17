<?php

class BangunRuang {
    public $jenis;
    public $sisi;
    public $jari;
    public $tinggi;

    public function __construct($jenis, $sisi, $jari, $tinggi) {
        $this->jenis = $jenis;
        $this->sisi = $sisi;
        $this->jari = $jari;
        $this->tinggi = $tinggi;
    }

    public function hitungVolume() {
        $volume = 0;

        // Percabangan
        switch ($this->jenis) {
            case "Bola":
                $volume = (4/3) * pi() * pow($this->jari, 3);
                break;

            case "Kerucut":
                $volume = (1/3) * pi() * pow($this->jari, 2) * $this->tinggi;
                break;

            case "Limas Segi Empat":
                $volume = (1/3) * pow($this->sisi, 2) * $this->tinggi;
                break;

            case "Kubus":
                $volume = pow($this->sisi, 3);
                break;

            case "Tabung":
                $volume = pi() * pow($this->jari, 2) * $this->tinggi;
                break;

            default:
                $volume = 0;
        }

        return $volume;
    }
}

// Array data bangun ruang
$dataBangun = [
    new BangunRuang("Bola", 0, 7, 0),
    new BangunRuang("Kerucut", 0, 14, 10),
    new BangunRuang("Limas Segi Empat", 8, 0, 24),
    new BangunRuang("Kubus", 30, 0, 0),
    new BangunRuang("Tabung", 0, 7, 10)
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Volume Bangun Ruang</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: blue;
            color: white;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Tabel Volume Bangun Ruang</h2>

<table>
    <tr>
        <th>Jenis Bangun Ruang</th>
        <th>Sisi</th>
        <th>Jari-jari</th>
        <th>Tinggi</th>
        <th>Volume</th>
    </tr>

    <?php
    // Perulangan
    foreach ($dataBangun as $bangun) {
        echo "<tr>";
        echo "<td>{$bangun->jenis}</td>";
        echo "<td>{$bangun->sisi}</td>";
        echo "<td>{$bangun->jari}</td>";
        echo "<td>{$bangun->tinggi}</td>";
        echo "<td>" . $bangun->hitungVolume() . "</td>";
        echo "</tr>";
    }
    ?>

</table>

</body>
</html>