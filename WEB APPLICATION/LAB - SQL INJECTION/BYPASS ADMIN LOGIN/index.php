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
            <h1>LOGIN ADMIN</h1>
         </div>
         <div class="" style="margin-top: 50px;">
         <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "Username Atau Password Salah";
            }else if($_GET['pesan'] == "logout"){
                echo "Anda Berhasil Logout";
            }else if($_GET['pesan'] == "belum_login"){
                echo "Anda Harus Login Terlebih Dahulu!";
            }
        }
        ?>
            <form action="assets/proses_login.php" method="POST">
               <div class="row">
                  <div class="col">
                    <label for="username">Username</label>
                     <input type="text" class="form-control" placeholder="admin" name="username" maxlength="100">
                  </div>
                  <div class="col">
                    <label for="password">Password</label>
                     <input type="text" class="form-control" placeholder="Password" name="password" maxlength="100">
                  </div>
               </div>
               <button type="submit" class="btn btn-danger mt-3">LOGIN</button>
            </form>
         </div>
      </div>
   </body>
</html>