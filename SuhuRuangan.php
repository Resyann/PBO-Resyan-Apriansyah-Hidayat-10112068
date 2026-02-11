<?php

class KalkulatorSuhu {

    public $suhu; // dalam Celsius

    public function __construct($suhu) {
        $this->suhu = $suhu;
    }

    // Celsius ke Fahrenheit
    public function cToF() {
        return ($this->suhu * 9/5) + 32;
    }

    // Celsius ke Kelvin
    public function cToK() {
        return $this->suhu + 273.15;
    }

    public function tampilkanHasil() {
        echo "=========== KALKULATOR SUHU ===========<br>";
        echo "Satuan   : Celsius (°C)<br>";
        echo "SUHU (C)     : " . $this->suhu . "<br>";
        echo "FAHRENHEIT   : " . $this->cToF() . "<br>";
        echo "KELVIN       : " . $this->cToK() . "<br>";
    }
}

// Contoh penggunaan
$kalkulator = new KalkulatorSuhu(30);
$kalkulator->tampilkanHasil();

?>
