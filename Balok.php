<?php
require_once "PPanjang.php";
class Balok extends PPanjang{
    private $tinggi;

    public function __construct($panjang, $lebar, $tinggi){
        $this->setPanjang($panjang);
        $this->setLebar($lebar);
        $this->height = $tinggi;
    }

    public function __set($property, $value){
        $this->$property = $value;
    }

    public function __get($property){
        return $this->$property;
    }

    public function getVolume(){
        $bal = $this->luas * $this->tinggi;
        return $bal;
    }

    public function getTinggi(){
        return $this->tinggi;
    }

}