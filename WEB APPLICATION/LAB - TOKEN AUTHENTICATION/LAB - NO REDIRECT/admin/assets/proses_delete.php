<?php
    // menghubungkan dengan koneksi
    include 'config/koneksi.php';

    // mengambil id yang akan dihapus
    $id = $_GET['id'];
    mysqli_query($koneksi, "DELETE FROM peserta WHERE id = '$id'");
    
    // mengalihkan halaman
    header("location: ../BerhasilLogin/dashboard.php");
?>