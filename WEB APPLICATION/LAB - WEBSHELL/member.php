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
   if(isset($_GET['pesan'])){
      if($_GET['pesan'] == "terkirim"){
         echo "<script>alert('Data Berhasil Disimpan')</script>";
      }
      }
      ?>
      <div class="container">
         <div class="text-center">
            <h1>LAB - WEBSHELL</h1>
         </div>
         <div class="" style="margin-top: 50px;">
           <h3>MEMBER TOMCAT SQUAD</h3>
           <table class="table table-striped table-bordered">
            <tr>
                <th>Foto</th>
                <th>Nama Lengkap</th>
                <th>Kelas</th>
            </tr>
            <?php
                // Load file koneksi.php
                include "assets/config/koneksi.php";

                $query = "SELECT * FROM profile"; // Tampilkan semua data gambar
                $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
                $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

                if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                        echo "<tr>";
                        echo "<td><img src='assets/images/".$data['screenshot']."' width='100' height='100'></td>";
                        echo "<td>".$data['nama']."</td>";
                        echo "<td>".$data['kelas']."</td>";
                        echo "</tr>";
                    }
                }else{ // Jika data tidak ada
                    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
                }
                ?>
           </table>
         </div>
      </div>
   </body>
</html>