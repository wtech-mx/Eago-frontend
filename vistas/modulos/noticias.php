<?php $url = Ruta::ctrRuta();  ?>
<?php $servidor = Ruta::ctrRutaServidor();  ?>



<!--=================================
  Bedgrum
================================= -->

 <section class="inner-intro bg-1 bg-overlay-black-70">
  <div class="container">
     <div class="row text-center intro-title">
           <div class="col-md-6 text-md-left d-inline-block">
             <h1 class="text-white"><?php echo $rutas[0] ?></h1>
           </div>
           <div class="col-md-6 text-md-right float-right">
             <ul class="page-breadcrumb">
                <li><a href="<?php echo $url;?>"><i class="fa fa-home"></i> Inicio</a> <i class="fa fa-angle-double-right"></i></li>
                <li class="active pagActiva"><?php echo $rutas[0] ?></li>
             </ul>
           </div>
     </div>
  </div>
</section>
<!--=================================
 blog  -->
<section class="latest-blog border masonry-main page-section-ptb">
 <div class="container-fluid">

   <div class="row">

    <div class="col-md-12">


     <div class="masonry columns-4">
      <?php foreach($posts2 as $post): ?>
                    <div class="grid-sizer"></div>
                     <div class="masonry-item clearfix ">
                       <div class="blog-2">
                        <div class="blog-image">
                        <a href="<?php echo $url; ?>blog/single.php?id=<?php echo $post['id']; ?>">
                           <img  class="img-fluid" src="<?php echo $servidor?>imagenes/<?php echo $post['thumb']; ?>" alt="<?php echo $post['titulo'] ?>">
                        </a>
                          <div class="date">
                            <span><?php echo fecha($post['fecha']); ?></span>
                          </div>
                        </div>
                        <div class="blog-content">
                          <div class="blog-admin-main">
                           <div class="blog-admin">
                            <h4 class="font-weight-bold"><a href="<?php echo $url; ?>blog/single.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo'] ?></a></h4>
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
                             <span><a href="<?php echo $url; ?>blog/single.php?id=<?php echo $post['id']; ?>" class="continuar">Continuar Leyendo</a></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php endforeach; ?>

      </div>
  <section class="paginacion">
      <ul>
          <?php
              # Establecemos el numero de paginas
              $numero_paginas = numero_paginas($blog_config['post_por_pagina'], $conexion);
          ?>
          <!-- Mostramos el boton para retroceder una pagina -->
          <?php if (pagina_actual() === 1): ?>
              <li class="disabled">&laquo;</li>
          <?php else: ?>
              <li><a href="noticias?p=<?php echo pagina_actual() - 1?>#blog">&laquo;</a></li>
          <?php endif; ?>

          <!-- Creamos un elemento li por cada pagina que tengamos -->
          <?php for ($i = 1; $i <= $numero_paginas; $i++): ?>
              <!-- Agregamos la clase active en la pagina actual -->
              <?php if (pagina_actual() === $i): ?>
                  <li class="active">
                      <?php echo $i; ?>
                  </li>
              <?php else: ?>
                  <li>
                      <a href="noticias?p=<?php echo $i?>#blog"><?php echo $i; ?></a>
                  </li>
              <?php endif; ?>
          <?php endfor; ?>

          <!-- Mostramos el boton para avanzar una pagina -->
          <?php if (pagina_actual() == $numero_paginas): ?>
              <li class="disabled">&raquo;</li>
          <?php else: ?>
              <li><a href="noticias?p=<?php echo pagina_actual() + 1; ?>#blog">&raquo;</a></li>
          <?php endif; ?>
      </ul>
  </section>

     </div>
    </div>
   </div>
</section>

<!--=================================
blog -->


