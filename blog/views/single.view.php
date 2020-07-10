<?php

require 'header.php';

		$url = Ruta::ctrRuta();
    	$urlServidor = Ruta::ctrRutaServidor();
?>

  <meta property="og:url"           content="<?php echo $url; ?>blog/single.php?id=<?php echo $post['id']; ?>" />
  <meta property="og:title"         content="<?php echo $post['titulo'] ?>" />
  <meta property="og:description"   content="<?php echo $post['extracto'] ?>" />
  <meta property="og:image"         content="<?php echo $urlServidor; ?>imagenes/<?php echo $post['thumb']; ?>" />
<!--=================================
  Bedgrum
================================= -->

 <section class="inner-intro bg-1 bg-overlay-black-70">
  <div class="container">
     <div class="row text-center intro-title">
           <div class="col-md-6 text-md-left d-inline-block">
             <h1 class="text-white"><?php echo $post['titulo'] ?></h1>
           </div>
           <div class="col-md-6 text-md-right float-right">
             <ul class="page-breadcrumb">
                <li><a href="<?php echo $url;?>"><i class="fa fa-home"></i> Inicio</a> <i class="fa fa-angle-double-right"></i></li>
                <li class="active pagActiva"><?php echo $post['titulo'] ?></li>
             </ul>
           </div>
     </div>
  </div>
</section>

<!--=================================
   Bedgrum
   ================================= -->

<!--=================================
 blog  -->

<section class="blog blog-single page-section-ptb" style="background: #fff">
  <div class="container">
    <div class="row">
     <div class="col-md-8">
        <div class="blog-entry">
          <div class="blog-entry-image  clearfix">
             <div class="portfolio-item">
                 <img src="https://eago.com.mx/Eago-frontend/vistas/img/LOGO-AGO-BLANCO-6.png" alt="Logo Eago"  style="position: absolute;top:0%;width: 15%;opacity: 0.5;padding: 10%">

               <img class="img-fluid" src="<?php echo $urlServidor; ?>imagenes/<?php echo $post['thumb']; ?>" alt="<?php echo $post['titulo'] ?>">
              </div>
            </div>
          <div class="entry-title">
             <a href="#"><?php echo $post['titulo'] ?></a>
          </div>
          <div class="entry-meta">
            <ul>
              <li><a href="#"><i class="fa fa-calendar"></i><?php echo fecha($post['fecha']); ?></a> </li>

            </ul>
          </div>
          <div class="entry-content">
            <p><?php echo $post['texto'] ?></p>
         </div>
          <div class="entry-share clearfix">

              <?php
              echo "<a class='button red float-left' href=\"javascript:history.go(-1)\">Regresar</a>";
              ?>
             <div class="share float-right"><a href="#"> <i class="fa fa-share-alt"></i> </a>
                           <div class="blog-social">
                                 <ul class="list-style-none">
                                  <li class="btnFacebook"> <a class="btnFacebook"><i class="fa fa-facebook"></i></a> </li>
                                  <li> <a href="https://twitter.com/AgoEscuderia?ref_src=twsrc%5Etfw" target="_blank"><i class="fa fa-twitter"></i></a> </li>
                                  <li> <a href="#"><i class="fa fa-instagram"></i></a> </li>
                                 </ul>
                                 </div>
                 </div>
             </div>
          </div>

     </div>
<!-- ============================================ -->
      <div class="col-md-4">
        <div class="blog-sidebar">
          <div class="sidebar-widget">
            <h6>Buscar Noticia y/o Tips</h6>
            <div class="widget-search">

                <form  action="<?php echo $url; ?>blog/buscar.php" method="get" name="busqueda" class="buscar">
                <button  type="submit"><i  type="submit" class="fa fa-search"></i></button>
                <input type="search" class="form-control placeholder " name="busqueda" placeholder="Buscar...." style="color: #000;">

                </form>

              </div>
          </div>

          <div class="sidebar-widget">
            <h6>Publicaciones Recientes</h6>
              <?php
              $posts = obtener_post($blog_config['post_por_pagina'], $conexion);
              ?>

              <?php foreach($posts as $post): ?>
            <div class="recent-post">
             <div class="recent-post-image">
              <img src="<?php echo $urlServidor; ?>imagenes/<?php echo $post['thumb']; ?>" alt="">
             </div>
             <div class="recent-post-info">
               <a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo'] ?></a>
              <span><i class="fa fa-calendar"></i> <?php echo fecha($post['fecha']); ?></span>
             </div>
            </div>
            <?php endforeach; ?>
         </div>

        </div>
      </div>
     </div>
   </div>
</section>

<!--=================================
blog -->

<?php

require 'footer.php';

?>


