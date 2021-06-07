<?php
    $server = 'localhost';
    $user   = 'root';
    $password = '';
    $database = 'tomcat_hacker';

    $koneksi = mysqli_connect($server, $user, $password, $database) OR DIE ("Koneksi Gagal");