<?php
$page = "admin";
include_once '../header.php';
?>
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
                     <input type="text" class="form-control" placeholder="admin" name="username" maxlength="10">
                  </div>
                  <div class="col">
                    <label for="password">Password</label>
                     <input type="text" class="form-control" placeholder="Password" name="password" maxlength="10">
                  </div>
               </div>
               <button type="submit" class="btn btn-danger mt-3">LOGIN</button>
            </form>
         </div>
      </div>
   </body>
<?php
include_once '../footer.php';
?>
