<?php
    require_once "Lingkaran.php";

    $obj = new Lingkaran(0);
    $obj->radius = 10.5; 
    echo "Lingkaran<br>";
    echo "Radius =  $obj->radius<br>";
    echo "Luas Lingkaran = ".$obj->getLuas()."<br>";