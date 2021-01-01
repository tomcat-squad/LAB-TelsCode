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
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
         <a class="navbar-brand" href="#">
         <img src="https://avatars0.githubusercontent.com/u/74373609?s=200&v=4" alt="LOGO" width="50">
         SEKOLAH HACKER
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
               <li class="nav-item"> 
                  <a class="nav-link" href="#">Home</a>
               </li>
               <li class="nav-item"> 
                  <a class="nav-link" href="index.php?page=mail">Contact Us</a>
               </li>
            </ul>
         </div>
      </div>
   </nav>
   <body>
      <div class="container">
      <div class="text-center">
      <h1>LAB - INCLUSION</h1>
      <hr>
      <div style="margin-top: 50px;">
      <h3>Pakar IT Indonesia</h3>
      <div class="row">
      <div class="col">
         <div class="card" style="width:300px">
            <img class="card-img-top" src="https://blog.gamatechno.com/wp-content/uploads/2017/08/7-Jim-Geovedi.jpg" alt="Foto" style="width:100%">
            <div class="card-body">
               <h4 class="card-title">Jim Geovedi</h4>
               <p class="card-text">Siapa bilang keahlian IT hanya bisa diperoleh melalui pendidikan sarjana. Jim Geovedi 
                  membuktikan bahwa teknologi dapat dipelajari secara mandiri. Ia dikenal karena kemampuannya dalam melakukan 
                  hacking terhadap sebuah sistem.
               </p>
            </div>
         </div>
      </div>
      <div class="col">
         <div class="card" style="width:300px">
            <img class="card-img-top" src="https://www.satu-indonesia.com/satu/satuindonesiaawards/wp-content/uploads/sites/6/2018/10/onno-w.jpg" alt="Foto" style="width:100%">
            <div class="card-body">
               <h4 class="card-title">Onno W Purbo</h4>
               <p class="card-text">Onno Widodo Purbo adalah seorang tokoh dan pakar di bidang teknologi informasi asal Indonesia. 
                   Selain pakar, Onno juga dikenal sebagai penulis, pendidik, dan pembicara seminar. Sebagai aktivis Onno dikenal 
                   dalam upayanya memperjuangkan Linux.
               </p>
            </div>
         </div>
      </div>
      <div class="col">
         <div class="card" style="width:300px">
            <img class="card-img-top" src="https://stei.itb.ac.id/wp-content/uploads/maxresdefault-1.jpg" alt="Foto" style="width:100%">
            <div class="card-body">
               <h4 class="card-title">Budi Raharjo</h4>
               <p class="card-text">Budi Rahardjo berprofesi sebagai Dosen, praktisi IT dan ahli keamanan informasi. Technopreneur, 
                   penulis, peneliti, pembicara, konsultan information security, blogger, rocker, itulah beberapa profesi yang dilakoni 
                   oleh Ir. Budi Rahardjo, MSc, PhD.
               </p>
            </div>
         </div>
      </div>
      <div style="margin-bottom: 100px;">
        <?php if(isset($_GET[ 'page'])){ 
            $page=$_GET[ 'page']; 
            include($page); 
        }
        ?>
      </div>
   </body>
</html>

