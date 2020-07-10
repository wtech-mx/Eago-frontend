<?php
  //$servidor = Ruta::ctrRutaServidor();
  include("../modelos/rutas.php");
  $url = Ruta::ctrRuta();
 ?>



<!--=================================
 blog  -->

<section class="latest-blog border masonry-main page-section-ptb">
 <div class="container">
  <?php foreach($posts as $post): ?>
   <div class="row">
    <div class="col-md-12">

            <div class="sidebar-widget p-5">
              <h6>Buscar</h6>
              <div class="widget-search">
                  <i class="fa fa-search"></i>
                  <input type="search" class="form-control placeholder" placeholder="Search....">
                </div>
            </div>

                 <div class="masonry columns-2">
                   <div class="grid-sizer"></div>
                     <div class="masonry-item clearfix ">
                       <div class="blog-2">
                        <div class="blog-image">
                        <a href="single.php?id=<?php echo $post['id']; ?>">
                          <img src="./imagenes/<?php echo $post['thumb']; ?>" alt="<?php echo $post['titulo'] ?>">
                        </a>
                          <div class="date">
                            <span><?php echo fecha($post['fecha']); ?></span>
                          </div>
                        </div>
                        <div class="blog-content">
                          <div class="blog-admin-main">
                           <div class="blog-admin">
                            <h4 class="font-weight-bold"><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo'] ?></a></h4>
                           </div>
                           <div class="blog-meta float-right">
                             <ul>

                               <li class="share"><a href="#"> <i class="fa fa-share-alt"></i><br /> ...</a>
                                <div class="blog-social">
                                 <ul class="list-style-none">
                                  <li> <a href="#"><i class="fa fa-facebook"></i></a> </li>
                                  <li> <a href="#"><i class="fa fa-twitter"></i></a> </li>
                                  <li> <a href="#"><i class="fa fa-instagram"></i></a> </li>
                                  <li> <a href="#"><i class="fa fa-pinterest-p"></i></a> </li>
                                 </ul>
                                 </div>
                               </li>
                             </ul>
                           </div>
                          </div>
                          <div class="blog-description text-center">
                            <p class="extracto"><?php echo $post['extracto'] ?></p>
                             <div class="separator"></div>
                             <span><a href="single.php?id=<?php echo $post['id']; ?>" class="continuar">Continuar Leyendo</a></span>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

       <?php endforeach; ?>
       <?php require '../modulos/pagination'; ?>

     </div>
    </div>
   </div>
</section>

<!--=================================
blog -->
