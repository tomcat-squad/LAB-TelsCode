<?php
    include_once('../../assets/config/koneksi.php')
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
            <table class="table table-bordered table-striped table-hover table-anggota">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Umur</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    // Cek Data Peserta
                    $query = mysqli_query($koneksi, 'SELECT * FROM peserta');
                    $no = 1;
                    while($row=mysqli_fetch_array($query)){
                        echo "<tr>";
                        echo "<td>$no</td>";
                        echo "<td>$row[nama]</td>";
                        echo "<td>$row[kelas]</td>";
                        echo "<td>$row[umur]</td>";
                        echo "<td><a href='index_edit.php?id=$row[id]'>Edit</a>
                                <a href='../assets/proses_delete.php?id=$row[id]' onclick=”return confirm(‘Yakin Hapus?’)”>Delete</a></td>";
                        $no++;
                    }
                    ?>
            </table>
         </div>
      </div>
   </body>
</html>