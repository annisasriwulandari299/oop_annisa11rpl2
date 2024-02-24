<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>latihan</title>
</head>
<body>
    <center>
        <img src="yayasan-removebg-preview.png" width="250" height="260">
        <div class="card-body">
             <h3>PENGGAJIAN</h3>
             <h3>GURU/KARYAWAN YAYASAN ASSALAAM</h3>
        </div>
    </center>
</body>
</html>

 <!-- awl pertma-->

 <div class="card white mt-5 ml-5 mr-5">
    <div class="card-header">
   DATA PENGGAJIAN
      </div>
    <div class="card-body">
    <form method="post" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">No</label>
    <input type="teks" class="form-control"  name="No">
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nama</label>
    <input type="teks" class="form-control" name="Nama">
  </div>
  <div class="form-group">
        <label for="">unit pendidikan</label>
        <select name="unit_pendidikan" id="" class="form-control">
        <option value="" class="form-control" selected disabled>unit pendidikan</option>
            <option value="TK">TK</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="SMK">SMK</option>
        </select>
  <div class="form-group">
    <label for="exampleInputPassword1">Tanggal gaji</label>
    <input type="date" class="form-control" name="tgl_gaji">
  </div>
</form>

<!--akhr pertma-->

<!-- awl kedua -->

<div class="row">
  <div class="col-sm-6">
    <div class="card">
        <h5><center>GAJI</center></h5>
        <div class="form-group">
        <label for="">Jabatan</label>
        <select name="jabatan" id="" class="form-control">
        <option value="" class="form-control">
            <option value="Kepala_sekolah">Kepala sekolah</option>
            <option value="Wakasek">Wakasek</option>
            <option value="Guru">Guru</option>
            <option value="Karyawan">Karyawan</option>
        </select>
      </div>
      <div class="form-group">
    <label for="exampleInputLamakerja">Lama Kerja</label>
    <input type="teks" class="form-control" name="Lama_kerja">
     </div>
     <div class="form-group">
        <label for="">Status Kerja</label>
        <select name="SK" id="" class="form-control">
        <option value="" class="form-control">
            <option value="Tetap">Tetap</option>
            <option value="Kontrak">Kontrak</option>
        </select>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><center>POTONGAN</center></h5>
        <div class="form-group">
    <label for="exampleInputLamakerja">BPJS</label>
    <input type="teks" class="form-control" name="bpjs">
     </div>
     <div class="form-group">
    <label for="exampleInputLamakerja">pinjaman</label>
    <input type="teks" class="form-control" name="pinjaman">
     </div>
     <div class="form-group">
    <label for="exampleInputLamakerja">tabungan</label>
    <input type="teks" class="form-control" name="tabungan">
     </div>
     <div class="form-group">
    <label for="exampleInputLamakerja">lainya</label>
    <input type="teks" class="form-control" name="lainya">
    
     </div>
     <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </div>
    </div>
  </div>
</div>

<!--  akhr kedua -->


<?php
if(isset($_POST['submit'])){

    $No               = $_POST['No'];
    $Nama             = $_POST['Nama'];
    $unit_pendidikan  = $_POST['unit_pendidikan'];
    $Tanggal_gaji     = $_POST['tgl_gaji'];
    $jabatan          = $_POST['jabatan'];
    $lama_kerja       = $_POST['Lama_kerja'];
    $status_kerja     = $_POST['SK'];
    $bpjs             = $_POST['bpjs'];
    $pinjaman         = $_POST['pinjaman'];
    $tabungan         = $_POST['tabungan'];
    $lainya           = $_POST['lainya'];
    $gaji_bersih;

    if($jabatan== "Kepala_sekolah"){
      $gaji = 5000000;
    } elseif ($jabatan== "Wakasek") {
      $gaji = 4000000;
    } elseif ($jabatan== "Guru") {
      $gaji = 3000000;
    } elseif ($jabatan== "Karyawan") {
      $gaji = 2000000;
    } else {
      echo "pilih jabatan anda ";
    } 
    
    if($status_kerja=="Tetap") {
      $bonus = 1000000;
    } elseif ($status_kerja=="Kontrak") {
      $bonus = 0;
    } else {
      echo "pilih status kerja anda";
    }

    $gaji_bersih = $gaji + $bonus - $bpjs - $pinjaman - $tabungan - $lainya;

    class hasil{

        public function pendaftaran($No2,$Nama2,$unit_pendidikan2,$tgl_gaji2,$jabatan2,$gaji2,$lama_kerja2,$status_kerja2,$bonus2,$bpjs2,$pinjaman2,$tabungan2,$lainya2,$gaji_bersih2){
      ?>    
          <center>
        <div class="card text-white bg-secondary mt-5 mb-3" style="max-width: 18rem;">
         <div class="card-header">Annisa sri wulandari</div>
         <div class="card-body">
           <h5 class="card-title">STRUK GAJI</h5>
           <table>
             <tr>
               <td>No</td>
               <td>:</td>
               <td><?php echo $No2 ?></td>
             </tr> 
             <tr>
               <td>Nama</td>
               <td>:</td>
               <td><?php echo $Nama2 ?></td>
               </tr>
               <tr>
               <td>Unit pendidikan</td>
               <td>:</td>
               <td><?php echo $unit_pendidikan2 ?></td>
               </tr>
               <tr>
               <td>Tanggal gaji</td>
               <td>:</td>
               <td><?php echo $tgl_gaji2 ?></td>
               </tr>
               <tr>
               <td>jabatan</td>
               <td>:</td>
               <td><?php echo $jabatan2 ?></td>
               </tr>
               <tr>
               <td>gaji</td>
               <td>:</td>
               <td><?php echo $gaji2 ?></td>
               </tr>
               <tr>
               <td>lama kerja</td>
               <td>:</td>
               <td><?php echo $lama_kerja2 ?></td>
               </tr>
               <tr>
               <td>status kerja</td>
               <td>:</td>
               <td><?php echo $status_kerja2 ?></td>
               </tr>
               <tr>
               <td>bonus</td>
               <td>:</td>
               <td><?php echo $bonus2 ?></td>
               </tr>
               <tr>
               <td>bpjs</td>
               <td>:</td>
               <td><?php echo $bpjs2 ?></td>
               </tr>
               <tr>
               <td>pinjaman</td>
               <td>:</td>
               <td><?php echo $pinjaman2 ?></td>
               </tr>
               <tr>
               <td>tabungan</td>
               <td>:</td>
               <td><?php echo $tabungan2 ?></td>
               </tr>
               <tr>
               <td>lainya</td>
               <td>:</td>
               <td><?php echo $lainya2 ?></td>
               </tr>
               <tr>
               <td>gaji_bersih</td>
               <td>:</td>
               <td><?php echo $gaji_bersih2 ?></td>
               </tr>
           </table>
         </div>
       </div>
       </center>

       <?php
               
        }
    }

    $cetak = new hasil();

    echo $cetak->pendaftaran($No,$Nama,$unit_pendidikan,$Tanggal_gaji,$jabatan,$gaji,$lama_kerja,$status_kerja,$bonus,$bpjs,$pinjaman,$tabungan,$lainya,$gaji_bersih);
}