<?php
    // Menghubungkan dengan koneksi
    include_once('../assets/config/koneksi.php');

    // Menangkap data yang dikirimkan dari form
    // SEBELUM DIPATCH
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $umur = $_POST['umur'];

    /* 
    // SESUDAH DI PATCH
    $nama = strip_tags($_POST['nama']);
    $kelas = strip_tags($_POST['kelas']);
    $umur = strip_tags($_POST['umur']);
    */
    
    // Memasukan data ke database
    mysqli_query($koneksi, "INSERT INTO peserta (nama, kelas, umur) VALUES ('$nama', '$kelas', '$umur')");
    
    // mengalihkan halaman
    header("location: ../index.php?pesan=terkirim");