<?php
   include('assets/config/koneksi.php');
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
      <div class="container">
         <div class="text-center">
            <h1>LAB - REFLECTED XSS</h1>
         </div>
         <?php 
            if(isset($_GET['cari'])){
               $cari = $_GET['cari']; 
               echo "<b>Hasil pencarian : ".$cari."</b>";
            }
         ?>
         <div class="" style="margin-top: 50px;">
         <form action="index.php" method="get">
               <label>Cari Data Member</label>
               <input class="form-control" type="text" name="cari">
               <input type="submit" value="Cari">
            </form>
         <table class="table table-bordered">
            <tr>
               <th>No</th>
               <th>Nama</th>
            </tr>
            <?php 
               if(isset($_GET['cari'])){
                  $cari = $_GET['cari']; 
                  $data = mysqli_query($koneksi, "SELECT * FROM peserta WHERE nama LIKE '%".$cari."%'");	
               }else{
                  $data = mysqli_query($koneksi, "SELECT * FROM peserta");		
               }
               $no = 1;
               while($row = mysqli_fetch_array($data)){
            ?>
            <tr>
               <td><?php echo $no++; ?></td>
               <td><?php echo $row['nama']; ?></td>
            </tr>
            <?php } ?>
         </table>
         </div>
      </div>
   </body>
</html>