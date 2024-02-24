<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <h2>Daftar SMK</h2>
            <form method ="POST" action= "">
                <table>
                    <h5>Daftar SMK</h5>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type='text' name='nama' placeholder="masukan nama"></td>
                    </tr>

                    <tr>
                        <td>Tgl_lahir</td>
                        <td>:</td>
                        <td><input type='date' name='Tgl_lahir' placeholder="tanggal lahir anda"></td>
                    </tr>

                    <tr>
                        <td>Jenis_kelamin</td>
                        <td>:</td>
                        <td>
                        <input type='radio' name='Jenis_kelamin' value="laki-laki"> laki-laki
                        <input type='radio' name='Jenis_kelamin' value="perempuan"> perempuan
        </tr>

                    <tr>
                        <td>Biaya_register</td>
                        <td>:</td>
                        <td><input type='number' name='Biaya_register' ></td>
                    </tr>

                    <tr>
                        <td>Jurusan</td>
                        <td>:</td>
                <td><select name="Jurusan">
                      <option value="">pilih</option>
                      <option value="RPL">RPL</option>
                      <option value="TKRO">TKRO</option>
                      <option value="TBSM">TBSM</option>
                 </select>

                    </td>
                       <tr>
                       <td></td>
                       <td></td>
                       <td><input type="submit" name="simpan" value='DAFTAR'></td>
                     </tr>

</table>
</form>
    </center>
</body>
</html>

<?php
if(isset($_POST['simpan'])) {
    $a = $_POST['nama'];
    $b = $_POST['Tgl_lahir'];
    $c = $_POST['Jenis_kelamin'];
    $d = $_POST['Biaya_register']; 
    $e = $_POST['Jurusan'];
    $harga = 0;

    if($e == "RPL") {
        $harga = 2500000;
    } else if($e == "TKRO") {
        $harga = 3000000;
    } else if($e == "TBSM") {
        $harga = 3500000;
    } else {
        $harga = "Biaya jurusan tidak ada";
    }

    $total = $harga + $d;

    echo "Struk register<br>";

    echo "Nama : $a <br>";
    echo "Tgl_lahir : $b <br>";
    echo "Jenis_kelamin : $c <br>";
    echo "Biaya_register : $d <br>";
    echo "Jurusan : $e <br>";
    echo "Biaya jurusan : $harga <br>";
    echo "Total pembayaran : $total <br>";
}