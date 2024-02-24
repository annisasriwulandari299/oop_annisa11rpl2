<center>
<?php
if(isset($_REQUEST['simpan'])){
    $nama = $_REQUEST['nama'];
    $jenis_kelamin = $_REQUEST['jenis_kelamin'];
    $tanggal_lahir = $_REQUEST['tanggal_lahir'];
    $kategori_olahraga = $_REQUEST['KO'];
    $pilihan_kelas = $_REQUEST['PK'];
    $kemampuan_fisik = $_REQUEST['KF'];
    $pembayaran = $_REQUEST['pembayaran'];
    $diskon = 0;
    
    if($kategori_olahraga == "Sepak bola"){
        $harga = 0;
            if($pilihan_kelas == "pemula") {
                $harga += 200000;
            } else if ($pilihan_kelas == "menengah") {
                $harga += 250000;
            } else if ($pilihan_kelas == "lanjutan") {
                $harga += 300000;
            }
    } else if ($kategori_olahraga == "Bulu tangkis") {
        $harga = 0;
        if ($pilihan_kelas == "pemula") {
            $harga += 150000;
            if ($jenis_kelamin == "wanita") {
                $diskon += $harga * 0.1;
            }
        } elseif ($pilihan_kelas == "menengah") {
            $harga += 200000;
            if ($jenis_kelamin == "wanita") {
                $diskon += $harga * 0.1;
            }
        } elseif ($pilihan_kelas == "lanjutan") {
            $harga += 250000;
            if ($jenis_kelamin == "wanita") {
                $diskon += $harga * 0.1;
            }
        }
    } else if ($kategori_olahraga == "Renang") {
        $harga = 0;
        if ($pilihan_kelas == "pemula") {
            $harga += 180000;
        } elseif ($pilihan_kelas == "menengah") {
            $harga += 220000;
        } elseif ($pilihan_kelas == "lanjutan") {
            $harga += 270000;
        }
    }


    $total = $harga - $diskon;

    if ($total > 500000) {
        $keputusan = "Selamat anda mendapat hadiah";
    } else {
        $keputusan = "Sangat disayangkan total harga anda tidak mencapai tujuan, anda tidak mendapat hadiah";
    }


    echo "======== Formulir pendaftaran ========<br>";
    echo "======================================<br>";


    echo "Nama              = $nama <br>";
    echo "jenis kelamin     = $jenis_kelamin <br>";
    echo "tanggal lahir     = $tanggal_lahir <br>";
    echo "Kategori olahraga = $kategori_olahraga <br>";
    echo "Pilihan kelas     = $pilihan_kelas <br>";
    echo "kemampuan fisik   = $kemampuan_fisik <br>"; 
    echo "pembayaran        = $pembayaran <br>";   
    echo "harga             = Rp. $harga <br>";
    echo "diskon            = Rp. $diskon <br>";
    echo "total harga       = Rp. $total <br>";
    echo "<br>";
    echo $keputusan;
}
?>