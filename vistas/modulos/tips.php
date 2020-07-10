<!--=================================
 latest news -->

<section class="latest-blog gray-bg page-section-ptb" id="blog">
  <div class="container">
   <div class="row">
    <div class="col-md-12">
      <div class="section-title">
         <span>Seccion de </span>
         <h2>Noticias y Tips</h2>
         <div class="separator"></div>
      </div>
    </div>
   </div>
   <div class="row">

    <?php foreach($posts as $post): ?>

       <div class="col-lg-4 col-md-12">
          <div class="blog-2">
            <div class="blog-image">
              <a href="<?php echo $url; ?>blog/single.php?id=<?php echo $post['id']; ?>" title="">
                <img class="img-fluid" src="<?php echo $urlServidor; ?>imagenes/<?php echo $post['thumb']; ?>" alt="">
              </a>
              <div class="date">
                <span><?php echo $post['titulo'] ?></span>
              </div>
            </div>
            <div class="blog-content">
              <div class="blog-admin-main">
               <div class="blog-admin">
                <span><?php echo fecha($post['fecha']); ?></span>
               </div>
               <div class="blog-meta float-right">
                 <ul>
                   <li><a href="<?php echo $url; ?>blog/single.php?id=<?php echo $post['id']; ?>"> <i class="fa fa-share-alt"></i><br />    <div class="fb-share-button" data-href="<?php echo $urlServidor; ?>single.php?id=<?php echo $post['id']; ?>" data-layout="button" data-size="large"></div></a>
                   </li>
                 </ul>
               </div>
              </div>
              <div class="blog-description text-center">
                 <a href="<?php echo $url; ?>blog/single.php?id=<?php echo $post['id']; ?>"><?php echo $post['extracto'] ?></a>
                 <div class="separator"></div>
                <p></p>
              </div>
            </div>
          </div>
       </div>

      <?php endforeach; ?>

    </div>
  <div class="container">
   <div class="row">
    <div class="col-md-12">
      <div class="section-title">
             <a href="noticias" class="btn btn-primary d-inline-block">Vér mas</a>
      </div>
    </div>
   </div>


  </div>
</section>

  <!-- Paginacion -->
 <?php require 'pagination.php'; ?>
  <!-- Paginacion -->
<!--=================================
 latest news -->