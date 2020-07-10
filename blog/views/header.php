<?php
  //$servidor = Ruta::ctrRutaServidor();
  include("../modelos/rutas.php");
  $url = Ruta::ctrRuta();
  include("estilos.php");
 ?>


<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="title" content="EAGO automotriz - administraci���n de flotillas - gestor���a - mec���nica - est���tica automotri - subastas electr���nicas">
<meta name="description" content="Somos empresa integrada por un equipo de profesionales con m���s de 20 a���os de experiencia en el ramo automotriz, enfocando esfuerzos en la administraci���n de flotillas, gestor���a, mec���nica y est���tica automotriz y subastas electr���nicas.">
<meta name="keyword" content="EAGO,automotriz,administraci���n de flotillas,gestor���a,mec���nica,est���tica automotriz,subastas electr���nicas">
<meta name="autor" content="Web Tech" />
<meta name="robots" content="index, follow">
<meta http-equiv="cache-control" content="public">

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
              <a href="../index.php" title="">
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
