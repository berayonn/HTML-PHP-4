<?php
require_once "Silinder.php";
//require_once "Lingkaran.php";

$ob = new Silinder(10, 25);
echo "Silinder<br>";
echo "Radius = ".$ob->getRadius()." <br>";
echo "Height = ".$ob->getHeight()." <br>";

echo "Luas Lingkaran = " . $ob->getLuas() . "<hr>";
echo "Volume Silinder = " . $ob->getVolume() . "<hr>";
