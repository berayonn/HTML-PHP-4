<?php
require_once "Lingkaran.php";
class Silinder extends Lingkaran{
    private $height;

    public function __construct($radius, $height){
        $this->setRadius($radius);
        $this->height = $height;
        
    }
/*
    public function __set($property, $value){
        $this->$property = $value;
    }

    public function __get($property){
        return $this->$property;
    }
*/
    public function getVolume(){
        //echo is_numeric($this->getHeight());
        $vol = $this->getLuas() * $this->getHeight();
        //$vol = $this->getLuas() * $this->getHeight();
        //echo is_numeric($this->getLuas());
        return $vol;
    }

    public function getHeight(){
        return $this->height;
    }

}