<?php
session_start();
// Menghubungkan dengan koneksi
include_once '../../../DATABASE/koneksi.php';

// Memasukan script CSRF Protection
include 'csrf.php';
$csrf = new csrf();


// Generate token id dan validasi
$token_id = $csrf->get_token_id();
$token_value = $csrf->get_token($token_id);

// Cek Validasi
if($csrf->check_valid('post')) {
    var_dump($_POST[$token_id]);
    // Menangkap data yang dikirimkan dari form
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $umur = $_POST['umur'];

    // Memasukan data ke database
    mysqli_query($koneksi, "INSERT INTO peserta (nama, kelas, umur) VALUES ('$nama', '$kelas', '$umur')");
        
    // mengalihkan halaman
    header("location: ../index.php?pesan=terkirim");
} else {
    echo 'Token Tidak Valid';
}