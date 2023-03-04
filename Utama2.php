<?php
    require_once "PPanjang.php";
    require_once "Balok.php";

    $obj = new PPanjang(10,5,5);
    $obj->panjang = 10;
    $obj->lebar = 5;
    $obj->tinggi = 5;
    echo "Persegi Panjang & Balok<br>";
    echo "72210477 Bryan Nicholas<br><br>";

    echo "Panjang =  $obj->panjang<br>";
    echo "Lebar   =  $obj->lebar<br>";
    echo "Tinggi  =  $obj->tinggi<br>";

    echo "Luas Persegi Panjang " . $obj->getLuas(). "<br>";
    echo "Keliling Persegi Panjang " . $obj->getKeliling(). "";
    echo "Volume Balok = " . $obj->getVolume() . "<br>";
