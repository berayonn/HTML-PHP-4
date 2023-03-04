<?php
class Lingkaran{
   protected $radius;

    public function __construct($radius){
        $this->radius = $radius;
    }
    
    public function __set($para1, $para2){
        if($para1=="radius")
            if($para2 >= 0)
                $this->radius = $para2;
            else    
                $this->radius = 0;
        else
            $this->$para1 = $para2;

        //echo "Ada properti yang akan ditulisi<br>";
        //echo "Propertinya : $para1<br>";
        //echo "Nilainya    : $para2<br>";
    }

    public function __get($para){
        return $this->$para;
    }

    public function setRadius($radius){
        $this->radius = $radius;
    }

    public function getRadius(){
        return $this->radius;
    }

    public function getKeliling(){
        return 2 * 3.14 * $this->radius;
    }

    public function __destruct(){
        echo "Objek Sudah Selesai, Sudah Tidak Ada Lagi";
    }
    
    public function getLuas(){ 
        $luas = 3.14 * $this->radius * $this->radius;
        $hasil = "$luas<br>";
        return $hasil;
    }
}