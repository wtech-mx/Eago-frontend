<?php

require 'header.php';

?>

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
               <img class="img-fluid" src="<?php echo $urlServidor; ?>imagenes/<?php echo $post['thumb']; ?>" alt="<?php echo $post['titulo'] ?>">
              </div>
            </div>
          <div class="entry-title">
             <a href="#"><?php echo $post['titulo'] ?></a>
          </div>
          <div class="entry-meta">
            <ul>
              <li><a href="#"><i class="fa fa-calendar"></i><?php echo fecha($post['fecha']); ?></a> </li>
<!--              <li><a href="#"><i class="fa fa-comments-o"></i> 5 Comments</a> /</li>-->
<!--              <li><a href="#"><i class="fa fa-folder-open"></i> News 2016</a> /</li>-->
<!--              <li><a href="#"><i class="fa fa-heart-o"></i>10</a></li>-->
            </ul>
          </div>
          <div class="entry-content">
            <p><?php echo $post['texto'] ?></p>
         </div>
          <div class="entry-share clearfix">
             <a class="button red float-left" href="<?php echo $url;?>index.php">Regresar</a>
             <div class="share float-right"><a href="#"> <i class="fa fa-share-alt"></i> </a>
                  <div class="blog-social">
                   <ul class="list-style-none">
                    <li> <a href="#"><i class="fa fa-facebook"></i></a> </li>
                    <li> <a href="#"><i class="fa fa-twitter"></i></a> </li>
                    <li> <a href="#"><i class="fa fa-instagram"></i></a> </li>
                   </ul>
                   </div>
                 </div>
             </div>
          </div>

<!--        <div class="blog-navigation">-->
<!--          <div class="row">-->
<!--            <div class="col-md-6">-->
<!--              <div class="navigation-next">-->
<!--                <a href="#">-->
<!--                  <img class="img-fluid" src="images/bg/01.jpg" alt="">-->
<!--                  <div class="port-arrow">-->
<!--                    <i class="fa fa-angle-left"></i>-->
<!--                   </div>-->
<!--                  <span>BLOGPOST WITH IMAGE</span>-->
<!--                 </a>-->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="col-md-6">-->
<!--              <div class="navigation-previous float-right text-right">-->
<!--                <a href="#">-->
<!--                  <img class="img-fluid" src="images/bg/06.jpg" alt="">-->
<!--                  <div class="port-arrow">-->
<!--                    <i class="fa fa-angle-right"></i>-->
<!--                   </div>-->
<!--                  <span>BLOGPOST WITH IMAGE</span>-->
<!--                 </a>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->

<!--        <div class="blog-form">-->
<!--          <div class="gray-form row">-->
<!--           <div class="col-md-4">-->
<!--            <div class="form-group">-->
<!--               <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">-->
<!--             </div>-->
<!--            </div>-->
<!--            <div class="col-md-4">-->
<!--             <div class="form-group">-->
<!--                <input type="text" class="form-control" id="exampleInputphone" placeholder="Phone">-->
<!--             </div>-->
<!--            </div>-->
<!--            <div class="col-md-4">-->
<!--             <div class="form-group">-->
<!--                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">-->
<!--             </div>-->
<!--            </div>-->
<!--            <div class="col-md-12">-->
<!--             <div class="form-group">-->
<!--               <textarea class="form-control" rows="7" placeholder="Comment"></textarea>-->
<!--              </div>-->
<!--            </div>-->
<!--             <div class="col-md-12">-->
<!--              <a class="button red" href="#">SUBMIT</a>-->
<!--            </div>-->
<!--          <div>-->
<!--         </div>-->
<!--        </div>-->
<!--       </div>-->

     </div>
<!-- ============================================ -->
      <div class="col-md-4">
        <div class="blog-sidebar">
          <div class="sidebar-widget">
            <h6>Search here</h6>
            <div class="widget-search">
                <i class="fa fa-search"></i>
                <input type="search" class="form-control placeholder" placeholder="Search....">
              </div>
          </div>

<!--          <div class="sidebar-widget">-->
<!--            <h6>categories</h6>-->
<!--            <div class="widget-link">-->
<!--               <ul>-->
<!--                 <li><a href="#"> <i class="fa fa-angle-right"></i> Test Drives </a></li>-->
<!--                 <li><a href="#"> <i class="fa fa-angle-right"></i> Video Reviews </a></li>-->
<!--                 <li><a href="#"> <i class="fa fa-angle-right"></i> Analysis & Features</a></li>-->
<!--                 <li><a href="#"> <i class="fa fa-angle-right"></i> Pre-purchase Car Inspection </a></li>-->
<!--                 <li><a href="#"> <i class="fa fa-angle-right"></i> Analysis & Features</a></li>-->
<!--               </ul>-->
<!--              </div>-->
<!--          </div>-->

          <div class="sidebar-widget">
            <h6>Recent Posts</h6>
            <div class="recent-post">
             <div class="recent-post-image">
              <img src="images/car/01.jpg" alt="">
             </div>
             <div class="recent-post-info">
               <a href="#">Time to change your </a>
              <span><i class="fa fa-calendar"></i> September 30, 2017</span>
             </div>
            </div>
            <div class="recent-post">
             <div class="recent-post-image">
              <img src="images/car/02.jpg" alt="">
             </div>
             <div class="recent-post-info">
              <a href="#">The best time to</a>
              <span><i class="fa fa-calendar"></i> September 30, 2017</span>
             </div>
            </div>
            <div class="recent-post">
             <div class="recent-post-image">
              <img src="images/car/03.jpg" alt="">
             </div>
             <div class="recent-post-info">
              <a href="#">Replacing a timing</a>
              <span><i class="fa fa-calendar"></i> September 30, 2017</span>
             </div>
            </div>
         </div>

<!--         <div class="sidebar-widget">-->
<!--           <h6>Tags</h6>-->
<!--            <div class="tags">-->
<!--             <ul>-->
<!--              <li><a href="#">Bootstrap</a></li>-->
<!--              <li><a href="#">HTML5</a></li>-->
<!--              <li><a href="#">Wordpress</a></li>-->
<!--              <li><a href="#">CSS3</a></li>-->
<!--              <li><a href="#">Creative</a></li>-->
<!--              <li><a href="#">Multipurpose</a></li>-->
<!--              <li><a href="#">Bootstrap</a></li>-->
<!--              <li><a href="#">HTML5</a></li>-->
<!--              <li><a href="#">Wordpress</a></li>-->
<!--            </ul>-->
<!--           </div>-->
<!--         </div>-->

<!--         <div class="sidebar-widget">-->
<!--            <h6>archives</h6>-->
<!--            <div class="widget-link">-->
<!--               <ul>-->
<!--                 <li><a href="#"> <i class="fa fa-angle-right"></i> June <span class="float-right">12</span></a></li>-->
<!--                 <li><a href="#"> <i class="fa fa-angle-right"></i> January  <span class="float-right">28</span></a></li>-->
<!--                 <li><a href="#"> <i class="fa fa-angle-right"></i> March <span class="float-right">08</span></a></li>-->
<!--                 <li><a href="#"> <i class="fa fa-angle-right"></i> November  <span class="float-right">04</span></a></li>-->
<!--                 <li><a href="#"> <i class="fa fa-angle-right"></i> December <span class="float-right">13</span></a></li>-->
<!--               </ul>-->
<!--              </div>-->
<!--          </div>-->

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


