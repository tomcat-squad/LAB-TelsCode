<?php
   // Memulai Session
   session_start();
   $page = "xss";
   include_once '../../header.php';
   include_once '../../DATABASE/koneksi.php';
    
   $id = (int)$_GET['id'];

   $query = mysqli_query($koneksi, "SELECT * FROM peserta WHERE id='$id'");
   $row = mysqli_fetch_array($query)
?>
   <body>
        <?php
         // Cek Session Apakah Sudah Status Admin
         if($_SESSION['status'] != 'admin'){
            header("location:../index.php?pesan=belum_login");
            exit;
         }
         ?>
      <div class="container">
         <div class="text-center">
            <h1>DASHBOARD ADMIN</h1>
         </div>
         <div class="" style="margin-top: 50px;">
         <a class="btn btn-danger" style="margin-bottom: 20px;" href="javascript:history.back();">KEMBALI</a>
         <h3>Edit Data</h3>
         <form action="../assets/proses_edit.php?id=<?php echo $id; ?>" method="POST">
               <div class="row">
                  <div class="col">
                    <label for="name">Nama</label>
                     <input type="text" class="form-control" placeholder="John Lenon" name="nama" maxlength="15" value="<?php echo $row['nama']?>">
                  </div>
                  <div class="col">
                    <label for="kelas">Kelas</label>
                     <input type="text" class="form-control" placeholder="X" name="kelas" maxlength="3" value="<?php echo $row['kelas']?>">
                  </div>
                  <div class="col">
                    <label for="umur">Umur</label>
                     <input type="number" class="form-control" placeholder="12" name="umur" min="10" value="<?php echo $row['umur']?>">
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