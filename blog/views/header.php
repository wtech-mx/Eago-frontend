<?php
  //$servidor = Ruta::ctrRutaServidor();
  include("../modelos/rutas.php");
  $url = Ruta::ctrRuta();
  include("estilos.php");
 ?>


<!--=================================
 header -->
<header id="header" class="defualt" style="background-image: url('<?php echo $url; ?>vistas/img/metal-header.jpg');opacity: 1;"><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
<!--=================================
 mega menu -->

<div class="menu">
  <!-- menu start -->
   <nav id="menu" class="mega-menu">
    <!-- menu list items container -->
    <section class="menu-list-items">
     <div class="container">
      <div class="row">
       <div class="col-md-12">
        <!-- menu logo -->
       <ul class="menu-logo">
            <li>
              <a href="index.php" title="">
                <img src="<?php echo $url; ?>vistas/img/LOGO-AGO-BLANCO-6.png"  alt="logo" >
              </a>
            </li>
        </ul>

        <ul class="menu-links">

          <li>
            <a href="<?php echo $url; ?>nosotros" title="" style="font-size: 19px;">¿Quienes Somos? </a>
          </li>


            <li><a href="javascript:void(0)" style="font-size: 19px;">Pide tu servicio Aqu&iacute <i class="fa fa-angle-down fa-indicator"></i></a>

                <div class="drop-down menu-bg grid-col-12">

                    <div class="grid-row">

                        <div class="grid-col-2">
                            <ul>
                              <li>
                              <a href="<?php echo $url; ?>mantenimiento" style="color: #000;font-size: 17px">Mantenimiento</a>
                              </li>
                              <li > <a  href="#" style="font-size: 15px">Preventivo</a> </li>
                              <li ><a  href="#" style="font-size: 15px">Correctivo</a></li>
                              <li ><a  href="#" style="font-size: 15px">Llantas </a></li>
                              <li ><a  href="#" style="font-size: 15px">Otras</a></li>
                            </ul>
                        </div>

                        <div class="grid-col-2">
                            <ul>
                              <li >

                                <a href="<?php echo $url; ?>estetica" style="color: #000;font-size: 17px">Estetica</a>
                              </li>
                              <li ><a href="#" style="font-size: 15px">Interior</a></li>
                              <li ><a href="#" style="font-size: 15px">Exterior</a></li>
                              <li ><a href="#" style="font-size: 15px">Ambos</a></li>
                            </ul>
                        </div>

                        <div class="grid-col-2">
                            <ul>
                              <li >
                                <a href="<?php echo $url; ?>gestoria" style="color: #000;font-size: 17px">Gestor&iacutea</a>
                              </li>
                              <li ><a href="#" style="font-size: 15px">CDMX</a></li>
                              <li ><a href="#" style="font-size: 15px">Morelos</a></li>
                              <li ><a href="#" style="font-size: 15px">Edo Mex</a></li>
                            </ul>
                        </div>

                        <div class="grid-col-2">
                            <ul>
                              <li >
                              <a href="<?php echo $url; ?>verificacion" style="color: #000;font-size: 17px">Verificaci&oacuten</a>
                              </li>
                              <li ><a href="#" style="font-size: 15px">CDMX</a></li>
                              <li ><a href="#" style="font-size: 15px">Morelos</a></li>
                              <li ><a href="#" style="font-size: 15px">Edo Mex</a></li>
                            </ul>
                        </div>
                        <div class="grid-col-2">
                            <ul>
                            <li >
                            <a href="<?php echo $url; ?>traslados" style="color: #000;font-size: 17px">Traslados</a>
                            </li>
                              <li ><a href="#" style="font-size: 15px">Auto</a></li>
                              <li ><a href="#" style="font-size: 15px">Camioneta</a></li>
                              <li ><a href="#" style="font-size: 15px">Cami&oacuten </a></li>
                              <li ><a href="#" style="font-size: 15px">Otros</a></li>
                            </ul>
                        </div>
                        <div class="grid-col-2">
                            <ul>
                              <li ><a href="subastas" style="color: #000;font-size: 17px">subastas</a></li>
                              <li ><a href="https://eago.com.mx/q-subastas/?s=login"></a>Entrar</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </li>
            <li>
              <a href="<?php echo $url; ?>contacto" style="font-size: 19px;"> Contacto </a>
            </li>

            <li>
              <a href="<?php echo $url; ?>noticias" style="font-size: 19px;"> noticias </a>
            </li>

             <li  data-toggle="modal" data-target=".bd-example-modal-lg">
                <a href="#" style="font-size: 19px;">
                  <i class="fa fa-user" ></i> Iniciar Sesi&oacuten</a>
            </li>

            <!--
            <li  data-toggle="modal" data-target=".bd-example-modal-lg2"><a href="#"><i class="fa fa-pencil"></i> Registrarse</a>
            </li> -->

            </ul>
           </div>
          </div>
         </div>
        </section>
       </nav>

     </div>
    </header>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
<!--     --><?php
        include("login.php");
//      ?>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
<!--     --><?php
        include("registro.php");
//      ?>
    </div>
  </div>
</div>