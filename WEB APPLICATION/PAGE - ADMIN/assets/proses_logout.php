<?php
    //Menghapus Semua Session
    session_destroy();

    //Mengalihkan Halaman Sambil Mengirim Pesan Logout
    header("location:../index.php?pesan=logout")
?>