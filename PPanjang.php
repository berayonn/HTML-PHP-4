<?php
class PPanjang{
   protected $panjang;
   protected $lebar;

    public function __construct($panjang, $lebar){
        $this->panjang = $panjang;
        //$this->lebar   = $lebar;
    }

    public function __set($para1, $para2){
        if($para1=="panjang")
            if($para2 >= 0)
                $this->radius = $para2;
            else    
                $this->radius = 0;
        else
            $this->$para1 = $para2;

    }
    
    public function __get($para){
        return $this->$para;
    }

    public function setPanjang($panjang){
        $this->panjang = $panjang;
    }

    public function getPanjang(){
        return $this->panjang;
    }

    public function setLebar($lebar){
        $this->lebar = $lebar;
    }

    public function getLebar(){
        return $this->lebar;
    }

    public function getLuas(){ 
        $luas = $this->panjang * $this->lebar;
        $hasil = "luasnya : $luas";
        return $hasil;
    }

    public function getKeliling(){ 
        $keliling = ($this->panjang + $this->lebar) * ($this->panjang + $this->lebar);
        $hasil = "kelilingnya : $keliling<br>";
        return $hasil;
    }

    public function getVolume(){
        $bal = $this->panjang * $this->lebar * $this->tinggi;
        return $bal;
    }
}