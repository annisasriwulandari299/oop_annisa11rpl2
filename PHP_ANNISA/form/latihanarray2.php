<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Data Nilai Ujian Kelas XII RPL</h2>
        <form method ="POST" action= "">
            <table>
            <tr>
                        <td>Jumlah siswa</td>
                        <td>:</td>
                        <td><input type='number' name='proses'></td>
                    </tr>

                    <tr>
                       <td></td>
                       <td></td>
                       <td><input type="submit" name="simpan" value='PROSES'></td>
                     </tr>
              </table>

    </center>
</body>
</html>

<?php

if(isset($_POST['simpan'])) {
    $jumlah = $_POST['proses'];

    for ($i=1; $i <= $jumlah ; $i ++) {
        echo "
            <form>
               <center>
                  <table>

                  <tr>
                    <td></td>
                    <td></td>
                    <td>Data siswa ke $i</td>
                  </tr>

                  <tr>
                    <td>NIS</td>
                    <td> : </td>
                    <td><input type=text></td>
                  </tr>

                  <tr>
                    <td>Nama</td>
                    <td> : </td>
                 <td><input type=text></td>
                  </tr>

                  <tr>
                     <td>Kelas</td>
                     <td> : </td>
                     <td><input type=text></td>
                  </tr>

                  <tr>
                     <td>Bahasa indonesia</td>
                     <td> : </td>
                    <td><input type=text></td>
                  </tr>

                  <tr>
                     <td>Bahasa inggris</td>
                     <td> : </td>
                     <td><input type=text></td>
                  </tr>

                  <tr>
                     <td>Matematika</td>
                     <td> : </td>
                     <td><input type=text></td>
                  </tr>

                  <tr>
                      <td>Produktif</td>
                      <td> : </td>
                      <td><input type=text></td>
                  </tr>

        
        ";
    };
};
?>

<tr>
  <td></td>
  <td></td>
  <td><input type="submit" name"simpan" value='simpan'>
</td>
</tr>


