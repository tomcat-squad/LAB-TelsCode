<?php
   // Memulai Session
   session_start();
   $page = "xss";
   include_once '../../header.php';
   include_once '../../DATABASE/koneksi.php';
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
                        echo "<td><a href='index_edit.php?id=$row[id]' class='text-primary'>Edit</a>
                                <a href='../assets/proses_delete.php?id=$row[id]' class='text-danger'>Delete</a></td>";
                        $no++;
                    }
                    ?>
            </table>
         </div>
      </div>
   </body>
<?php
include_once '../..//footer.php';
?>
