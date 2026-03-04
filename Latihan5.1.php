<?php
$nilai = 21;

if ($nilai > 100) {
    echo "Maaf Nilai Tidak terdekteksi";
} elseif ($nilai >=65){
    echo "lulus";
} elseif ($nilai <65){
    echo "tidak lulus";
} elseif ($nilai <0){
    echo "Nilai tidak diketahui";
}

?>