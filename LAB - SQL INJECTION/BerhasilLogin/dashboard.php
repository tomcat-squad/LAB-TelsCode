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
         // Memulai Session
         session_start();
         // Cek Session Apakah Sudah Status Admin
         if($_SESSION['status'] != 'admin'){
             header("location:../index.php?pesan=belum_login");
                exit;
         }
         ?>
      <div class="container">
         <div class="text-center" style="margin-top: 100px;">
            <h1>HALLO ADMIN</h1>
         </div>
         <div class="" style="margin-top: 50px;">
            <a class="btn btn-danger" style="margin-bottom: 20px;" href="../assets/proses_logout.php">KELUAR</a>
         </div>
      </div>
   </body>
</html>