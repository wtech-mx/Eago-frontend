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
 contact -->

<section class="contact page-section-ptb white-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <div class="section-title">
           <span></span>
           <h2>Contactanos</h2>
           <div class="separator"></div>
         </div>
      </div>
    </div>
    <div class="row">
<!--      <div class="col-lg-3 col-md-6">
       <div class="contact-box text-center">
          <i class="fa fa-map-marker"></i>
          <h5>Address</h5>
          <p>220E Front St. Burlington NC 215</p>
        </div>
      </div>-->
      <div class="col-lg-3 col-md-6">
          <a href="tel:+5510065421">
           <div class="contact-box text-center">
              <i class="fa fa-phone"></i>
              <h5>Teléfono</h5>
              <p> 55 1006 5421</p>
            </div>
          </a>
      </div>

      <div class="col-lg-3 col-md-6">
         <a href="mailto:adiazm@eago.com.mx">
           <div class="contact-box text-center">
              <i class="fa fa-envelope-o"></i>
              <h5>Email</h5>
              <p>adiazm@eago.com.mx</p>
            </div>
          </a>
      </div>

      <div class="col-lg-3 col-md-6">
          <a href="https://www.facebook.com/Escuderia-AGO-107694017316744" target="_blank">
           <div class="contact-box text-center">
              <i class="fa fa-facebook"></i>
              <h5>Facebook</h5>
              <p>facebook.com/pg/Escuderia-AGO</p>
            </div>
          </a>
      </div>

      <div class="col-lg-3 col-md-6">
          <a href="https://www.instagram.com/escuderia.ago/" target="_blank">
               <div class="contact-box text-center">
                  <i class="fa fa-instagram"></i>
                  <h5>Instagram</h5>
                  <p>instagram.com/escuderia.ago/</p>
                </div>
              </div>
          </a>
    </div>

    <div class="page-section-ptb">
      <div class="row">
       <div class="col-lg-8 col-sm-12">
       <div class="gray-form">
         <div id="formmessage">Success/Error Message Goes Here</div>
           <form class="form-horizontal" id="contactform" role="form" method="post" action="http://themes.potenzaglobalsolutions.com/html/cardealer/php/contact-form.php">
            <div class="contact-form row">
              <div class="col-lg-4 col-sm-12">
               <div class="form-group">
                 <input id="name" type="text" placeholder="Nombre*" class="form-control"  name="name">
               </div> 
             </div> 
             <div class="col-lg-4 col-sm-12">
               <div class="form-group">
                 <input type="email" placeholder="Email*" class="form-control" name="email">
                </div>
              </div>
              <div class="col-lg-4 col-sm-12">
                <div class="form-group">
                  <input type="text" placeholder="telefono*" class="form-control" name="phone">
                </div>
              </div>
              <div class="col-md-12">
                 <div class="form-group">
                   <textarea class="form-control input-message" placeholder="Mensaje*" rows="7" name="message"></textarea>
                 </div>
              </div>
              <div class="col-md-12">
                 <input type="hidden" name="action" value="sendEmail"/>
                 <button id="submit" name="submit" type="submit" value="Send" class="button red"> Enviar</button>
               </div>
              </div>
          </form>
          <div id="ajaxloader" style="display:none"><img class="center-block" src="images/ajax-loader.gif" alt=""></div> 
           </div> 
       </div>
      <div class="col-lg-4 col-sm-12 mt-lg-0 mt-4">
        <div class="opening-hours gray-bg mt-sm-0">
          <h6>HORARIO DE APERTURA</h6>
          <ul class="list-style-none">
            <li><strong>Domingo</strong> <span class="text-red"> Cerrado</span></li>
            <li><strong>Lunes a Viernes </strong> <span> 09:00 AM  a 19:00 PM</span></li>
            <li><strong>Sabados </strong> <span>09:00 AM  a 15:00 PM</span></li>
          </ul>
        </div>
      </div>
     </div>
 </div>

<!--   <div class="row">
     <div class="col-md-4">
       <div class="feature-box-3">
          <div class="icon">
            <i class="fa fa-clock-o"></i>
          </div>
          <div class="content">
            <h6>opening hours </h6>
            <p>Voluptatem accusanoremque sed ut perspiciatis unde omnis iste natus error sit laudantium, totam rem aperiam. </p>
          </div>
         </div>
     </div>
     <div class="col-md-4">
       <div class="feature-box-3">
          <div class="icon">
            <i class="fa fa-support"></i>
          </div>
          <div class="content">
            <h6>Our Support Center </h6>
            <p>Iste natus error sit sed ut perspiciatis unde omnis voluptatem laudantium, totam rem aperiam. </p>
          </div>
         </div>
     </div>
     <div class="col-md-4">
       <div class="feature-box-3">
          <div class="icon">
            <i class="fa fa-info"></i>
          </div>
          <div class="content">
            <h6>Some Information </h6>
            <p>Totam rem aperiam sed ut perspiciatis unde omnis iste natus error sit voluptatem laudantium.</p>
          </div>
         </div>
     </div>
   </div>-->

  </div>
</section>

<!--=================================
 contact -->


<!--=================================
 contact-map -->

<!-- <section class="contact-map">
  <div class="container-fluid">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3224.017231421863!2d-79.43780268425046!3d36.09306798010035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88532bae09664ccb%3A0xaa6b8f98d3fb8135!2s220+E+Front+St%2C+Burlington%2C+NC+27215%2C+USA!5e0!3m2!1sen!2sin!4v1475045272926" allowfullscreen></iframe>
  </div>
 </section>-->

<!--=================================
 contact-map -->
 
 
<!--=================================
 footer -->

<?php 

  include("footer.php");
 ?>
 
<!--=================================
 footer -->


 <!--=================================
 color customizer --> 
 
<!--<div class="style-customizer closed">
  <div class="buy-button"> <a class="opener" href="#"><i class="fa fa-cog fa-spin"></i></a>  </div>
  <div class="clearfix content-chooser">
     <a target="_blank" class="button" href="https://themeforest.net/item/car-dealer-the-best-car-dealer-automotive-responsive-html5-template/19226545?ref=Potenzaglobalsolutions">purchase now</a> 
      <h3>Color Schemes</h3>
      <p>Which theme color you want to use? Here are some predefined colors.</p>
      <ul class="styleChange clearfix">
        <li class="skin-default selected" title="Default" data-style="skin-default" ></li>
        <li class="skin-blue" title="Blue" data-style="skin-blue" ></li>
        <li class="skin-orange" title="Orange" data-style="skin-orange"></li>
        <li class="skin-purple" title="purple" data-style="skin-purple"></li>
        <li class="skin-gold" title="gold" data-style="skin-gold"></li>
        <li class="skin-green" title="green" data-style="skin-green"></li>
        <li class="skin-palatinate-blue" title="palatinate-blue" data-style="skin-palatinate-blue" ></li>
        <li class="skin-yellow" title="Yellow" data-style="skin-yellow"></li>
      </ul>
      <ul class="resetAll">
      <li><a class="button button-reset" href="#">Reset All</a></li>
    </ul>
  </div>
</div>-->
 
 <!--=================================
 color customizer --> 


 <!--=================================
 back to top -->

<div class="car-top">
  <span><img src="images/car-eago.png" alt=""></span>
</div>

 <!--=================================
 back to top -->

  
</body>

</html>
