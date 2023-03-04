<?php
class Bilangan{
    private $bil = array();

    public function __construct(){
        echo "Objek Bilangan Terbentuk<br>";
    }

    public function setBil($bil){
        $this->bil = $bil;
    }

    public function showArray(){
        foreach($this->bil as $isi)
            echo "$isi ";
        echo "<hr>";
    }
}

$data = array(40, 50, 20, 75, 80, 30);
$obj = new Bilangan();
$obj->setBil($data);
$obj->showArray();

