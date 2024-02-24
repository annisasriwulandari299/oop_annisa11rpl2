<?php

class contoh{

    public function __construct(){
        echo "Assalamualaikum <br>";
    }

    public function perkenalan(){
        echo "nama saya annisa <br>";
    }

    public function __destruct(){
        echo "Hallo bestie";
    }
}
$cetak = new contoh();

echo $cetak-> perkenalan();