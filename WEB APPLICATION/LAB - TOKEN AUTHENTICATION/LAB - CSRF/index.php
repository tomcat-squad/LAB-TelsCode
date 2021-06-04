<?php
   session_start();
   $page = "tokenAuthentication";
   include_once '../../header.php';
   
   if(isset($_GET['pesan'])){
      if($_GET['pesan'] == "terkirim"){
         echo "<script>alert('Data Berhasil Disimpan')</script>";
      }
   }
   include 'assets/csrf.php';
   $csrf = new csrf();
   // Generate token id dan validasi
   $token_id = $csrf->get_token_id();
   $token_value = $csrf->get_token($token_id);
?>
   <body>
      <div class="container">
         <div class="text-center">
            <h1>LAB - CSRF</h1>
         </div>
         <div class="" style="margin-top: 50px;">
           <h3>FORM PENDAFTARAN</h3>
            <form action="assets/proses_submit.php" method="post">
            <input type="hidden" name="<?= $token_id; ?>" value="<?= $token_value; ?>" />
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