<?php
$page = "xss";
include_once '../../header.php';
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
                  <input type="text" class="form-control" placeholder="John Lenon" name="nama">
               </div>
               <div class="col">
                  <label for="kelas">Kelas</label>
                  <input type="text" class="form-control" placeholder="X" name="kelas">
               </div>
               <div class="col">
                  <label for="umur">Umur</label>
                  <input type="number" class="form-control" placeholder="12" name="umur">
               </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
         </form>
         <div class="text-right">
            <a href="<?php echo ('http://'); echo $_SERVER['HTTP_HOST'];?>/LAB-TelsCode/WEB APPLICATION/LAB - CROSS SITE SCRIPTING/STORED XSS/admin" class="btn btn-info text-right">ADMIN LOGIN</a>
         </div>
      </div>
   </div>
</body>
<?php
include_once '../../footer.php';
?>
