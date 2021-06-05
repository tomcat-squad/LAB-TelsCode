<?php
$page = "webShell";
include_once '../header.php';
?>
   <body>
      <div class="container">
         <div class="text-center">
            <h1>LAB - WEBSHELL</h1>
         </div>
         <div class="" style="margin-top: 50px;">
           <h3>FORM PENDAFTARAN</h3>
            <form action="assets/proses_submit.php" method="POST" enctype="multipart/form-data">
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
                     <label for="gambar">Foto Profile</label>
                     <input type="file" class="form-control" name="gambar">
                  </div>
               </div>
               <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
         </div>
      </div>
   </body>
<?php
include_once '../footer.php';
?>