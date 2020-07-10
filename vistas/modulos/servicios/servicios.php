<body>

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
   Bedgrum 
   ================================= -->



<!--=================================
 latest news -->

<section class="page-section-ptb white-bg" >
  <div class="container">

   <div class="row">

     <div class="col-lg-4 col-md-6">
      <div class="content-box-7">
        <a href="estetica">
        <div class="content-box-img">
           <img class="img-fluid center-block" src="<?php echo $url; ?>vistas/images/car/28.jpg" alt="">
           <div class="info">
            <i class="flaticon-steering-wheel"></i>
            <h6 class="text-white">MECÁNICA</h6>
            <p class="text-white">Con nuestra red de talleres, te brindamos la mejor opción para la reparación necesaria</p>
          </div>
        </div>
      </a>
      </div>
    </div>

     <div class="col-lg-4 col-md-6">
      <div class="content-box-7">
      <a href="gestoria">
        <div class="content-box-img">
           <img class="img-fluid center-block" src="<?php echo $url; ?>vistas/images/car/gestoria.jpg" alt="">
           <div class="info">
            <i class="flaticon-air-conditioning"></i>
            <h6 class="text-white">GESTORÍA</h6>
            <p class="text-white">
              Deja de hacer filas y trámites engorrosos, Nuestro equipo te ofrece servicios rápidos y transparentes.
            </p>
          </div>
        </div>
      </a>
      </div>
    </div>

    <div class="col-lg-4 col-md-6">
      <div class="content-box-7">
          <a href="nosotros">
        <div class="content-box-img">
           <img class="img-fluid center-block" src="<?php echo $url; ?>vistas/images/car/seguro_flotilla01.jpg" alt="">
           <div class="info">
            <i class="flaticon-travel"></i>
            <h6 class="text-white">Verificacion</h6>
            <p class="text-white">CDMX, Edo México y Morelos</p>
          </div>
        </div>
        </a>
      </div>
    </div>


     <div class="col-lg-4 col-md-6">
      <div class="content-box-7">
          <a href="estetica">
        <div class="content-box-img">
           <img class="img-fluid center-block" src="<?php echo $url; ?>vistas/images/car/lavado.jpg" alt="">
           <div class="info">
            <i class="flaticon-engine"></i>
            <h6 class="text-white">ESTÉTICA </h6>
            <p class="text-white">Cuidamos hasta el último detalle estético y de limpieza de tu auto</p>
          </div>
        </div>
      </a>
      </div>
    </div>

     <div class="col-lg-4 col-md-6">
      <div class="content-box-7">
        <a href="traslados">
        <div class="content-box-img">
           <img class="img-fluid center-block" src="<?php echo $url; ?>vistas/images/car/21.jpg" alt="">
           <div class="info">
            <i class="flaticon-wheel-alignment"></i>
            <h6 class="text-white">Tralados</h6>
            <p class="text-white">Nuestros asesores de traslado trabajan apasionadamente para encontrar las mejores soluciones para cada vehículo que transportamos en todo México.</p>
          </div>
        </div>
      </a>
      </div>
    </div>

   </div>   
  </div>
</section>


<?php
require("footer.php");
 ?>
