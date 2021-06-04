<?php
include_once '../../header.php'
?>
   <body>
      <div class="container">
         <div class="text-center">
            <h1>LAB - INCLUSION</h1>
            <hr>
            <div style="margin-top: 50px;">
               <h3>Pakar IT Indonesia</h3>
               <a class="btn btn-dark" href="index.php?page=mail.php">Contact Us</a>
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
         <?php 
         //SEBELUM DI PATCH
         if(isset($_GET[ 'page'])){ 
            $page=$_GET['page']; 
            require($page); 
         }

         /* 
         //SESUDAH PATCH
         if(isset($_GET[ 'page'])){ 
            $page=$_GET[ 'page']; 
            $search=preg_quote( "://", "/"); 
            $pattern="/$search/" ; 
            if(preg_match($pattern, $page)){ 
                header("location: $page"); 
                }else{ 
                    include($page. '.php'); 
                } 
            } 
         */
         ?>
      </div>
   </body>
<?php
include_once '../../footer.php'
?>