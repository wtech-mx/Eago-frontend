
<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" style="margin-top: 15%">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Present your <br>
                awesome product</h4>
              <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
              <a href="#">BUY NOW</a> </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://i.imgur.com/NKvkfTT.png" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item" style="margin-top: 15%">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Present your <br>
                awesome product</h4>
              <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
              <a href="#">BUY NOW</a> </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://i.imgur.com/duWgXRs.png" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel-item" style="margin-top: 15%">
      <div class="mask flex-center">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-12 order-md-1 order-2">
              <h4>Present your <br>
                awesome product</h4>
              <p>Lorem ipsum dolor sit amet. Reprehenderit, qui blanditiis quidem rerum <br>
                necessitatibus praesentium voluptatum deleniti atque corrupti.</p>
              <a href="#">BUY NOW</a> </div>
            <div class="col-md-5 col-12 order-md-2 order-1"><img src="https://i.imgur.com/DGkR4OQ.png" class="mx-auto" alt="slide"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>
<!--slide end-->

<section class="latest-blog border masonry-main page-section-ptb" style="background-color: #051546;">
 <div class="container">

   <div class="row">
    <div class="col-md-12">
          <form action="<?php echo $url; ?>blog/buscar.php" method="get" name="busqueda" class="buscar">
            <div class="sidebar-widget ">
              <h2 style="color:#fff;">Buscar</h2>


              <div class="widget-search p-5">
                  <!--<i class="fa fa-search"></i>-->
                  <input type="search" class="form-control placeholder " name="busqueda" placeholder="Buscar...." style="color:#fff;">
              </div>

            </div>
          </form>

       <div class="paginador p-3">
       	<h4 style="color:#fff;"><?php echo $titulo; ?></h4>
       </div>

     <div class="masonry columns-2">
       <div class="grid-sizer"></div>
      <?php foreach($resultados as $post): ?>
         <div class="masonry-item clearfix">
          <div class="blog-2">
          <div class="blog-image">
            <a href="single.php?id=<?php echo $post['id']; ?>">

                <img class="img-fluid" src="<?php echo $urlServidor; ?>imagenes/<?php echo $post['thumb']; ?>" alt="<?php echo $post['titulo'] ?>">
            </a>
              <div class="date">
                <span><?php echo fecha($post['fecha']); ?></span>
              </div>
          </div>
            <div class="blog-content">
              <div class="blog-admin-main">
               <div class="blog-admin">
                <h4  class="font-weight-bold"><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo'] ?></a></h4>
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
                <p class="extracto style="color:#fff;""><?php echo $post['extracto'] ?></p>
                 <div class="separator"></div>
                 <span style="color:#fff;"><a href="single.php?id=<?php echo $post['id']; ?>" class="continuar">Continuar Leyendo</a></span>
              </div>
            </div>
          </div>
        </div>
       <?php endforeach; ?>

</section>
------------------------------------

<section class="latest-blog border masonry-main page-section-ptb" style="background-color: #051546;">
 <div class="container">

   <div class="row">
    <div class="col-md-12">
          <form action="<?php echo $url; ?>blog/buscar.php" method="get" name="busqueda" class="buscar">
            <div class="sidebar-widget ">
              <h2 style="color:#fff;">Buscar</h2>


              <div class="widget-search p-5">
                  <!--<i class="fa fa-search"></i>-->
                  <input type="search" class="form-control placeholder " name="busqueda" placeholder="Buscar...." style="color:#fff;">
              </div>

            </div>
          </form>

       <div class="paginador p-3">
       	<h4 style="color:#fff;"><?php echo $titulo; ?></h4>
       </div>

     <div class="masonry columns-2">
       <div class="grid-sizer"></div>
      <?php foreach($resultados as $post): ?>
         <div class="masonry-item clearfix">
          <div class="blog-2">
          <div class="blog-image">
            <a href="single.php?id=<?php echo $post['id']; ?>">

                <img class="img-fluid" src="<?php echo $urlServidor; ?>imagenes/<?php echo $post['thumb']; ?>" alt="<?php echo $post['titulo'] ?>">
            </a>
              <div class="date">
                <span><?php echo fecha($post['fecha']); ?></span>
              </div>
          </div>
            <div class="blog-content">
              <div class="blog-admin-main">
               <div class="blog-admin">
                <h4  class="font-weight-bold"><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['titulo'] ?></a></h4>
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
                <p class="extracto style="color:#fff;""><?php echo $post['extracto'] ?></p>
                 <div class="separator"></div>
                 <span style="color:#fff;"><a href="single.php?id=<?php echo $post['id']; ?>" class="continuar">Continuar Leyendo</a></span>
              </div>
            </div>
          </div>
        </div>
       <?php endforeach; ?>

</section>
