<?php

class manusia{

    public $nama = "annisa cakeup";

    private function tampilkan_nama(){
        echo "Nama saya annisaaa <br>";
    }

    public function keluarkan(){
        $this->tampilkan_nama();
    }
}

$cetak = new manusia();
//manggil method
echo $cetak->keluarkan();
//menggil property
echo $cetak->nama;