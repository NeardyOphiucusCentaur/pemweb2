<?php
    class Lingkaran {
        public $jari;
        /**
         * Konstruktor
         * @var float
         */
        public const phi = 3.14;

        public function __construct($r) {
            $this->jari = $r;
        }

        public function get_luas () {
            $luas = self::phi * $this->jari * $this->jari;
            return $luas;
        }

        public function get_keliling () {
            $keliling = 2.0 * self::phi * $this->jari;
            return $keliling;
        }
        
        public function cetak () {
            echo "";
            echo "Lingkaran dengan jari-jari: " . $this->jari;
            echo "<br>Luas: " . $this->get_luas();
            echo "<br>Keliling: " . $this->get_keliling();
        }
    }
?>