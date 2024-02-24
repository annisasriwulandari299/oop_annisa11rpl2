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
  <!--awal-->
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
        <select name="" id="" class="form-control">
        <option value="" class="form-control" selected disabled>unit pendidikan</option>
            <option value="TK">TK</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="SMK">SMK</option>
        </select>
  <div class="form-group">
    <label for="exampleInputPassword1">Tanggal gaji</label>
    <input type="date" class="form-control" name="Tangal_gaji">
  </div>
</form>
<!--awal-->

<!-- kedua -->
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">GAJI</h5>
        <div class="form-group">
    <label for="exampleInputEmail1">Jabatan</label>
    <option value="" class="form-control" selected disabled>pilih jabatan</option>
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Lama kerja</label>
    <option value="" class="form-control" selected disabled>lama kerja</option>
    </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Status kerja</label>
    <option value="" class="form-control" selected disabled>status kerja</option>
    </div>
  </form>

      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">POTONGAN</h5>
        <div class="card-body">
    <form method="post" action="">
  <div class="form-group">
 
    <label for="exampleInputPassword1">BPJS</label>
    <input type="teks" class="form-control" name="bpjs">
  </div>
    <label for="exampleInputEmail1">Pinjaman</label>
    <option value="" class="form-control" selected disabled>Pinjaman</option>
    </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Tabungan</label>
    <option value="" class="form-control" selected disabled>Tabungan</option>
    </div>
   <div class="form-group">
    <label for="exampleInputEmail1">Lainya</label>
    <option value="" class="form-control" selected disabled>Lainya</option>
    </div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
  </div>
</div>
<!-- /kedua -->

 </body>
</html>


<?php
if(isset($_POST['submit'])){

    $No               = $_POST['No'];
    $Nama             = $_POST['Nama'];
    $unit_pendidikan  = $_POST['unit_pendidikan'];
    $Tanggal_gaji     = $_POST['Tanggal_gaji'];

    class hasil{

        public function pendaftaran($No2,$Nama2,$unit_pendidikan2,$Tanggal_gaji2){
      ?>    
          <center>
        <div class="card text-white bg-info mt-5 mb-3" style="max-width: 18rem;">
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
               <td><?php echo $Tanggal_gaji2 ?></td>
               </tr>
           </table>
         </div>
       </div>
       </center>

       <?php
               
        }
    }

    $cetak = new hasil();

    echo $cetak->pendaftaran($No,$Nama,$unit_pendidikan,$Tanggal_gaji);
}