<form action="proses-form-pendaftaran.php" method="POST">
    <div>
        <label>Nama</label> <br>
        <input type="text" name="nama">
    </div>
    <div>
        <label>Email</label> <br>
        <input type="email" name="email">
    </div>
    <div>
        <label>Usia</label> <br>
        <input type="number" name="usia">
    </div>
    <div>
        <label>Tanggal Lahir</label> <br>
        <input type="date" name="tanggal_lahir">
    </div>
    <div>
        <label>Alamat</label> <br>
        <textarea name="alamat"></textarea>
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Jenis Kelamin</label> <br>
        <input type="radio" name="jenis_kelamin" value="perempuan"> perempuan <br>
        <input type="radio" name="jenis_kelamin" value="laki-laki"> laki-laki
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Status</label> <br>
        <select name="status">
            <option value="pelajar">pelajar</option>
            <option value="mahasiswi">mahasiswi</option>
        </select>
    </div>
    <div style="margin-bottom: 1rem;">
        <label>Hobi</label> <br>
        <input type="checkbox" name="hobi" value="berenang"> Berenang <br>
        <input type="checkbox" name="hobi" value="mewarnai"> mewarnai <br>
        <input type="checkbox" name="hobi" value="baca novel"> Baca novel <br>
        <input type="checkbox" name="hobi" value="ngoding"> scroll tiktok <br>
    </div>
    <div>
        <input type="submit" name='simpan' value='gooo'>
    </div>
</form>