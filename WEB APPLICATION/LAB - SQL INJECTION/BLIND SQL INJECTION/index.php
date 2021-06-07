<?php
   $page = "sqlInjection";
   include_once '../../header.php';
   include_once '../../DATABASE/koneksi.php';
?>
   <body>
      <div class="container">
         <div class="text-center">
            <h1>LAB - BLIND SQL INJECTION</h1>
         </div>
         <?php 
            if(isset($_GET['cari'])){
               $cari = $_GET['cari'];
               echo "<b>Hasil pencarian : ".$cari."</b>";
            }
         ?>
         <div class="" style="margin-top: 50px;">
         <form action="index.php" method="get">
               <label>Cari Data Member Dengan ID</label>
               <input class="form-control" type="text" name="cari">
               <input class="btn btn-dark" style="margin-top: 10px; margin-bottom: 10px;" type="submit" value="Cari">
            </form>
         <table class="table table-bordered">
            <tr>
               <th>ID</th>
               <th>Nama</th>
            </tr>
            <?php 
               if(isset($_GET['cari'])){
                  $cari = $_GET['cari']; 
                  $data = mysqli_query($koneksi, "SELECT * FROM peserta WHERE id = {$cari}");	
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
<?php
   include_once '../../footer.php';
?>