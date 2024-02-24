<?php 
$nama = "annisa sri wulandari"; //string
$umur = 23; //integer
$nilai = 87.5; //float
$status = true; //boolean

echo "Nama : $nama <br>" ;
echo 'Umur : ' . $umur . '<br>' ;
printf("Nilai : %.3f <br>", $nilai);
if ($status) {
    echo "status siswa aktif";
} else {
    echo "status siswa tidak aktif";
}
?>