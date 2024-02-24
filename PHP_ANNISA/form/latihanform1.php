<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>membuat form sederhana</title>
</head>
<body>
    <form>
        <div>
            <label>nama</label> <br>
            <input name="nama" type="text" placeholder="masukan nama">
        </div>
        <div>
            <label>alamat</label> <br>
            <input name="alamat" type="text" placeholder="masukan alamat">
        </div>
        <div>
            <button>submit</button>
        </div>    
    </form>        
</body>
</html>

<?php

    $nama = @$_GET['nama'];
    $alamat = @$_GET['alamat'];

    if ($nama) {
        echo "<strong>Nama:</strong> {$nama} <br>";
    }

    if ($alamat) {
        echo "<strong>Alamat:</strong> {$alamat} <br>";
    }
?>