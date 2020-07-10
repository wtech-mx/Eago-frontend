<?php
  //$servidor = Ruta::ctrRutaServidor();
  $url = Ruta::ctrRuta();
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
            <a href="nosotros" title="" style="font-size: 19px;">¿Quienes Somos? </a>
          </li>


            <li><a href="javascript:void(0)" style="font-size: 19px;">Servicios<i class="fa fa-angle-down fa-indicator"></i></a>

                <div class="drop-down menu-bg grid-col-12">

                    <div class="grid-row">

                        <div class="grid-col-2">
                            <ul>
                              <li>
                              <a href="mecanica" style="color: #000;font-size: 17px">Mecánica</a>
                              </li>
                            </ul>
                        </div>

                        <div class="grid-col-2">
                            <ul>
                              <li>
                                <a href="estetica" style="color: #000;font-size: 17px">Estetica</a>
                              </li>

                            </ul>
                        </div>

                        <div class="grid-col-2">
                            <ul>
                              <li >
                                <a href="gestoria" style="color: #000;font-size: 17px">Gestor&iacutea</a>
                              </li>
                            </ul>
                        </div>

                        <div class="grid-col-2">
                            <ul>
                              <li >
                              <a href="verificacion" style="color: #000;font-size: 17px">Verificaci&oacuten</a>
                              </li>
                            </ul>
                        </div>
                        <div class="grid-col-2">
                            <ul>
                            <li >
                            <a href="traslados" style="color: #000;font-size: 17px">Traslados</a>
                            </li>
                            </ul>
                        </div>
                        <div class="grid-col-2">
                            <ul>
                              <li ><a href="subastas" style="color: #000;font-size: 17px">subastas</a></li>
                              <li ><a href="https://eago.com.mx/q-subastas/?s=login">Entrar</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </li>
            <li>
              <a href="contacto" style="font-size: 19px;"> Contacto </a>
            </li>

            <li>
              <a href="noticias" style="font-size: 19px;"> noticias </a>
            </li>

<!--             <li  data-toggle="modal" data-target=".bd-example-modal-lg">-->
<!--                <a href="#" style="font-size: 19px;">-->
<!--                  <i class="fa fa-user" ></i> Iniciar Sesi&oacuten</a>-->
<!--            </li>-->

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
     <?php
        include("login.php");
      ?>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
     <?php
        include("registro.php");
      ?>
    </div>
  </div>
</div>