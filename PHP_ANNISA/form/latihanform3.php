<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <center>
        <h2>Formulir pendaftaran</h2>
        <form method="POST" action= "hasilform3.php">
        <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type='text' name='nama'></td>
        </tr>
        <tr>
            <td>jenis_kelamin</td>
            <td>:</td>
            <td>
            <select name="jenis_kelamin">
            <option value="pria">pria</option>
                  <option value="pria">pria</option>
                  <option value="wanita">wanita</option>
                  </select>
            </td>
        </tr>
        <tr>
            <td>Tanggal_lahir</td>
            <td>:</td>
            <td><input type='date' name='tanggal_lahir'></td>
        </tr>
        <tr>
            <td>kategori_olahraga</td>
            <td>:</td>
            <td><input type='radio' name='KO' value="Sepak bola"> Sepak bola
                <input type='radio' name='KO' value="Bulu tangkis"> Bulu tangkis
                <input type='radio' name='KO' value="Renang"> Renang
        </tr>
        <tr>
            <td>pilihan_kelas</td>
            <td>:</td>
            <td><input type="checkbox" name="PK" value="pemula"> Pemula <br>
                <input type="checkbox" name="PK" value="menengah"> Menengah <br>
                <input type="checkbox" name="PK" value="lanjutan"> Lanjutan <br>
            </td>    
        </tr>
        <tr>
            <td>kemampuan_fisik</td>
            <td>:<td>
            <td><center><textarea name="KF" cols="15" rows="5"></textarea></center></td>
        </tr>
        <tr>
            <td>Pembayaran</td>
            <td>:</td>
            <td>
            <select name="pembayaran">
                  <option value="">pilih</option>
                  <option value="Transfer bank">Transfer bank</option>
                  <option value="Kartu kredit">Kartu kredit</option>
                  </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="simpan" value='KIRIM'></td>
        </tr>

  </table>
  </form>
 </center>
</body>
</html>