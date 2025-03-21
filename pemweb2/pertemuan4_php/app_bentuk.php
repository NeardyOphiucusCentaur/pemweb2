<?php
    require_once "lingkaran.php";

    $lingkaran1 = new Lingkaran(8.4);
    $lingkaran2 = new Lingkaran(10);
    echo"";
    echo "Jari-jari Lingkaran 1: " . $lingkaran1->jari;
    echo "<br>Nilai PHI ". Lingkaran::phi;
    echo "<br>Luasnya ". $lingkaran1->get_luas();
    echo "<br>Kelilingnya ". $lingkaran1->get_keliling();
    echo "<hr>";
    $lingkaran1->cetak();
    echo "<hr>";
    $lingkaran2->cetak();

?>