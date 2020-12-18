<?php
    // menghubungkan dengan koneksi
    include '../../assets/config/koneksi.php';

    $id = $_GET['id'];
    
    // Menangkap data yang dikirim dari form dan melakukan filter terhadap tag HTML, XML dan PHP
    $nama = trim(strip_tags($_POST['nama']));
    $kelas = trim(strip_tags($_POST['kelas']));
    $umur = trim(strip_tags($_POST['umur']));

    // melakukan update data di database
    mysqli_query($koneksi, "UPDATE peserta SET nama='$nama',
                                               kelas='$kelas',
                                               umur='$umur' WHERE id = '$id'");
    
    // mengalihkan halaman
    header("location:../BerhasilLogin/dashboard.php");
    exit();
?>