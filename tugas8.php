<?php

class Karyawan {
    public $nama, $golongan, $jamLembur;

    // 5. Constructor
    public function __construct($n, $g, $j) {
        $this->nama = $n;
        $this->golongan = $g;
        $this->jamLembur = $j;
    }

    // 1. Method Gaji Pokok
    public function getGajiPokok() {
        $daftarGaji = [
            "Ib" => 1250000, "Ic" => 1300000, "Id" => 1350000,
            "IIa" => 2000000, "IIb" => 2100000, "IIc" => 2200000, "IId" => 2300000,
            "IIIa" => 2400000, "IIIb" => 2500000, "IIIc" => 2600000, "IIId" => 2700000,
            "IVa" => 2800000, "IVb" => 2900000, "IVc" => 3000000, "IVd" => 3100000
        ];
        return $daftarGaji[$this->golongan] ?? 0;
    }

    public function hitungTotal() {
        return $this->getGajiPokok() + ($this->jamLembur * 15000);
    }

    // 7. Destructor
    public function __destruct() {
        // Objek dihapus dari memori
    }
}

// 4. Array untuk menampung data (CRUD)
$daftarKaryawan = [];

function input() {
    return trim(fgets(fopen("php://stdin", "r")));
}

while (true) {
    echo "\n===== MENU GAJI KARYAWAN =====\n";
    echo "1. Tampilkan Data\n";
    echo "2. Tambah Data\n";
    echo "3. Update Data\n";
    echo "4. Hapus Data\n";
    echo "5. Keluar\n";
    echo "Pilih menu: ";
    $pilihan = input();

    if ($pilihan == "1") {
        echo "\n===== DATA GAJI KARYAWAN =====\n";
        echo "No | Nama | Golongan | Jam Lembur | Total Gaji\n";
        foreach ($daftarKaryawan as $i => $k) {
            $total = number_format($k->hitungTotal(), 0, ',', '.');
            echo ($i + 1) . " | {$k->nama} | {$k->golongan} | {$k->jamLembur} | Rp{$total}\n";
        }
    } 
    elseif ($pilihan == "2") {
        echo "Nama: "; $nama = input();
        echo "Golongan: "; $gol = input();
        echo "Jam Lembur: "; $jam = input();
        
        $daftarKaryawan[] = new Karyawan($nama, $gol, $jam);
        echo "Data berhasil ditambahkan!\n";
    } 
    elseif ($pilihan == "3") {
        echo "Pilih No yang akan diupdate: "; $no = (int)input() - 1;
        if (isset($daftarKaryawan[$no])) {
            echo "Nama Baru: "; $daftarKaryawan[$no]->nama = input();
            echo "Golongan Baru: "; $daftarKaryawan[$no]->golongan = input();
            echo "Jam Lembur Baru: "; $daftarKaryawan[$no]->jamLembur = input();
            echo "Data diperbarui!\n";
        }
    } 
    elseif ($pilihan == "4") {
        echo "Pilih No yang akan dihapus: "; $no = (int)input() - 1;
        if (isset($daftarKaryawan[$no])) {
            unset($daftarKaryawan[$no]);
            $daftarKaryawan = array_values($daftarKaryawan); // Re-index array
            echo "Data dihapus!\n";
        }
    } 
    elseif ($pilihan == "5") {
        echo "Keluar program...\n";
        break;
    } 
    else {
        echo "Menu tidak tersedia!\n";
    }
}