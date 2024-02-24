<?php
//buat class
class Manusia{
       
    //buat property/attribut
    public $nama = "dep";
    public $nama2 = "jul";

    //buat method / function
    public function makan(){
        echo " $this->nama suka makan seblak";
    }
    public function minum(){
        echo " $this->nama2 suka minum air putih";
    }

    
}

//buat object
$cetak = new Manusia();

echo $cetak->makan();
echo "<br>";
echo $cetak->minum();

?>