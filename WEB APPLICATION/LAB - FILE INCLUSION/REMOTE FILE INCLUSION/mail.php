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
         </div>
         <div class="" style="margin-top: 50px;">
           <h3>KONTAK KAMI</h3>
            <form action="assets/proses_submit.php" method="POST">
               <div class="row">
                  <div class="col">
                    <label for="name">Nama</label>
                     <input type="text" class="form-control" placeholder="John Lenon" maxlength="15">
                  </div>
                  <div class="col">
                    <label for="kelas">Email</label>
                     <input type="email" class="form-control" placeholder="jhon@gmail.com" maxlength="5-">
                  </div>
                  <div class="col">
                    <label for="umur">Nomor HP</label>
                     <input type="number" class="form-control" placeholder="0813 8166 2912" min="0">
                  </div>
               </div>
               <button type="submit" class="btn btn-primary mt-3">Kirim</button>
            </form>
         </div>
      </div>
   </body>
</html>