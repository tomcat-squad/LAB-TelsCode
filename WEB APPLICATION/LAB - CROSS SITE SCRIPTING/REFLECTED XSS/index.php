<?php
include_once '../../header.php';
include_once 'assets/config/koneksi.php';
?>
<!-- BODY -->
<body>
    <div class="container">
        <div class="text-center">
            <h1>LAB - REFLECTED XSS</h1>
        </div>
        <?php 
        if(isset($_GET['cari'])){
            $cari = $_GET['cari']; // SEBELUM DI PATCH
            //$cari = strip_tags($_GET['cari']); // SESUDAH DI PATCH
            echo "<b>Hasil pencarian : ".$cari."</b>";
            }
        ?>
        <div class="" style="margin-top: 50px;">
            <form action="index.php" method="get">
                <label>Cari Data Member</label>
                <input class="form-control" type="text" name="cari">
                <input class="btn btn-dark" style="margin-top: 10px; margin-bottom: 10px;" type="submit" value="Cari">
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
<?php
include_once '../../footer.php';
?>