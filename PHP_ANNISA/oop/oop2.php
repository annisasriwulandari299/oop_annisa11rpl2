<?php
class bangunDatar{
    public $persegi;
    public $persegi_panjang;
    public $segitiga;
    public $lingkaran;

    public function persegi(){
      echo "<h3>Menghitung luas persegi</h3>";
      echo "Rumus : sisi x sisi <br>";
      $sisi = 5;
      $luas = ($sisi * $sisi);
      echo "Sisi : $sisi <br>";
      echo "Luasnya : $luas <br>";
     
    }

    public function persegi_panjang(){
        echo "<h3>Menghitung luas persegi panjang</h3>";
        echo "Rumus : panjang x lebar <br>";
        $panjang = 5;
        $lebar = 4;
        $luas = ($panjang * $lebar);
        echo "Panjang : $panjang <br>";
        echo "Lebar : $lebar <br>";
        echo "Luasnya : $luas <br>";
      }

    public function segitiga(){
        echo "<h3>Menghitung luas segitiga </h3>";
        echo "Rumus : alas x tinggi <br>";
        $alas = 5;
        $tinggi = 6;
        $luas = ($alas * $tinggi);
        echo "Alas : $alas <br>";
        echo "Tinggi : $tinggi <br>";
        echo "Luasnya : $luas <br>";
    }

     public function lingkaran(){
        echo "<h3>Menghitung luas lingkaran</h3>";
        echo "Rumus : konstanta x Jari-jari <br>";
        $k = 3.14;
        $jari = 4;
        $luas = ($k * $jari);
        echo "Konstanta : $k <br>";
        echo "Jari-jari : $jari <br>";
        echo "Luasnya : $luas <br>";
     }

}
$cetak = new bangunDatar();

echo $cetak->persegi();
echo "<br>";
echo $cetak->persegi_panjang();
echo "<br>";
echo $cetak->segitiga();
echo "<br>";
echo $cetak->lingkaran();