<?php
$page = "xss";
include_once '../../header.php';
include_once 'assets/config/koneksi.php';
?>
<!-- BODY -->
<body>
   <?php
   if (isset($_GET['pesan']))
   {
      if ($_GET['pesan'] == "terkirim")
      {
         echo "<script>alert('Data Berhasil Disimpan')</script>";
      }
   }
   ?>
   <div class="container">
      <div class="text-center">
         <h1>LAB - STORED XSS</h1>
      </div>
      <div class="" style="margin-top: 50px;">
         <h3>FORM PENDAFTARAN</h3>
         <form action="assets/proses_submit.php" method="POST">
            <div class="row">
               <div class="col">
                  <label for="name">Nama</label>
                  <input type="text" class="form-control" placeholder="John Lenon" name="nama" maxlength="15">
               </div>
               <div class="col">
                  <label for="kelas">Kelas</label>
                  <input type="text" class="form-control" placeholder="X" name="kelas" maxlength="3">
               </div>
               <div class="col">
                  <label for="umur">Umur</label>
                  <input type="number" class="form-control" placeholder="12" name="umur" min="10">
               </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
         </form>
      </div>
   </div>
</body>
<?php
include_once '../../footer.php';
?>
