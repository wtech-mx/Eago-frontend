<!--=================================
 latest news -->
<br><br>
<section class="latest-blog gray-bg page-section-ptb p-2 mt-5" id="blog">
  <div class="container">
   <div class="row">
    <div class="col-md-12">
      <div class="section-title">
         <span><br><br>Seccion de </span>
         <h2>Noticias y Tips</h2>
         <div class="separator"></div>
      </div>
    </div>
   </div>
   <div class="row">

    <?php foreach($posts as $post): ?>

  <meta property="og:url"           content="<?php echo $url; ?>blog/single.php?id=<?php echo $post['id']; ?>" />
  <meta property="og:title"         content="<?php echo $post['titulo'] ?>" />
  <meta property="og:description"   content="<?php echo $post['extracto'] ?>" />
  <meta property="og:image"         content="<?php echo $urlServidor; ?>imagenes/<?php echo $post['thumb']; ?>" />

       <div class="col-lg-4 col-md-12">
          <div class="blog-2">
                        <div class="blog-image">
                        <a href="<?php echo $url; ?>blog/single.php?id=<?php echo $post['id']; ?>">
                              <img src="<?php echo $url; ?>vistas/img/LOGO-AGO-BLANCO-6.png" alt="Logo Eago"  style="position: absolute;top:5%;right:5%;width: 15%;opacity: 0.5">
                              <img class="img-fluid" src="<?php echo $urlServidor; ?>imagenes/<?php echo $post['thumb']; ?>" alt="<?php echo $post['titulo'] ?>">
                        </a>
                          <div class="date">
                            <span><?php echo fecha($post['fecha']); ?></span>
                          </div>
                        </div>

                        <div class="blog-content">

                          <div class="blog-admin-main">

                           <div class="blog-admin">

                            <h4 class="font-weight-bold">

                                <a href="<?php echo $url; ?>blog/single.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo'] ?> </a>
                            </h4>
<!--                               <a href="https://twitter.com/AgoEscuderia?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow-->
<!--                               </a>-->
<!--                               <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>-->
                           </div>
                           <div class="blog-meta float-right">
                             <ul>

                               <li class="share"><a href="#"> <i class="fa fa-share-alt"></i><br /></a>
                                <div class="blog-social">
                                 <ul class="list-style-none">
                                  <li class="btnFacebook"> <a class="btnFacebook"><i class="fa fa-facebook"></i></a> </li>
                                  <li> <a href="https://twitter.com/AgoEscuderia?ref_src=twsrc%5Etfw" target="_blank"><i class="fa fa-twitter"></i></a> </li>
                                  <li> <a href="#"><i class="fa fa-instagram"></i></a> </li>
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
                              <div class="fb-like" data-href="https://www.facebook.com/Escuderia-AGO-107694017316744/" data-width="" data-layout="button" data-action="like" data-size="small" ></div>
                          </div>
                        </div>
          </div>
       </div>

        <script>
          /*=============================================
            COMPARTIR EN FACEBOOK
            https://developers.facebook.com/docs/
            =============================================*/
            $(".btnFacebook").click(function(){

                FB.ui({

                    method: 'share',
                    display: 'popup',
                    href: '<?php echo $url; ?>blog/single.php?id=<?php echo $post['id']; ?>',
                }, function(response){});

            })
        </script>
      <?php endforeach; ?>

    </div>
  <!-- Paginacion -->
 <?php require 'pagination.php'; ?>
  <!-- Paginacion -->
<!--  <div class="container">-->
<!--   <div class="row">-->
<!--    <div class="col-md-12">-->
<!--      <div class="section-title">-->
<!--             <a href="noticias" class="btn btn-primary d-inline-block">Vér mas</a>-->
<!--      </div>-->
<!--    </div>-->
<!--   </div>-->


  </div>
</section>


<!--=================================
 latest news -->