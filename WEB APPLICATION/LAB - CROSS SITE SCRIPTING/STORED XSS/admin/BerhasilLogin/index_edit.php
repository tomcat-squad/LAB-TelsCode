<?php
    include_once('../../assets/config/koneksi.php');
    
    $id = (int)$_GET['id'];

    $query = mysqli_query($koneksi, "SELECT * FROM peserta WHERE id='$id'");
    $row = mysqli_fetch_array($query)
?>
<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <title>SEKOLAH HACKER - TOMCAT SQUAD</title>
   </head>
   <body>
        <?php
         // Memulai Session
         session_start();
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
         <a class="btn btn-danger" style="margin-bottom: 20px;" href="../assets/proses_logout.php">KELUAR</a>
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
</html>