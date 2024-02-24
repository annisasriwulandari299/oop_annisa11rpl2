<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   <!-- navbar -->

   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="form.php">pendaftaran <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="form2.php">form data ortu <span class="sr-only">(current)</span></a>
      </li>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

   <!-- navbar -->

   <!--content-->

      <div class="card white bg-secondary mt-5 ml-5 mr-5">
    <div class="card-header">
   FORM DATA ORANG TUA
      </div>
    <div class="card-body">
    <form method="post" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Ayah</label>
    <input type="teks" class="form-control"  name="nama_ayah">
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Tanggal lahir (ayah)</label>
    <input type="date" class="form-control" name="tanggal_lahirayah">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nama Ibu</label>
    <input type="teks" class="form-control" name="nama_ibu">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Tanggal Lahir (ibu)</label>
    <input type="date" class="form-control" name="tanggal_lahiribu">
    </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
  </div>
</div>

   <!--/content-->

   

 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>


<?php
if(isset($_POST['submit'])){

    $nama_ayah      = $_POST['nama_ayah'];
    $tanggal_lahirayah  = $_POST['tanggal_lahirayah'];
    $nama_ibu       = $_POST['nama_ibu'];
    $tanggal_lahiribu   = $_POST['tanggal_lahiribu'];


    class hasil{

        public function pendaftaran($nama_ayah3,$tanggal_lahirayah3,$nama_ibu3,$tanggal_lahiribu3){
      ?>    
          <center>
        <div class="card text-white bg-success mt-5 mb-3" style="max-width: 18rem;">
         <div class="card-header">Hasil pendaftaran</div>
         <div class="card-body">
           <h5 class="card-title">Pendaftaran Sukses</h5>
           <table>
             <tr>
               <td>Nama ayah</td>
               <td>:</td>
               <td><?php echo $nama_ayah3 ?></td>
             </tr>
             <tr>
               <td>Tanggal lahir</td>
               <td>:</td>
               <td><?php echo $tanggal_lahirayah3 ?></td>
             </tr>
             <tr>
               <td>Nama ibu</td>
               <td>:</td>
               <td><?php echo $nama_ibu3 ?></td>
             </tr>
             <tr>
               <td>Tanggal lahir</td>
               <td>:</td>
               <td><?php echo $tanggal_lahiribu3 ?></td>
             </tr>
             
       </center>

       <?php
               
        }
    }

    $cetak = new hasil();

    echo $cetak->pendaftaran($nama_ayah,$tanggal_lahirayah,$nama_ibu,$tanggal_lahiribu);
}