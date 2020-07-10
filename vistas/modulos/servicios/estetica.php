<?php 
  $servidor = Ruta::ctrRutaServidor();
  $url = Ruta::ctrRuta();
 ?>

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
 custom-block -->

<section class="custom-block-3 white-bg page-section-ptb">
  <div class="container">
   <div class="row">
    <div class="col-md-6">

        <div class="title">
          <h3>¡Cuidate y cuidalos!</h3>
        </div>

        <div class="content">
          <p>Nuestro objetivo es que tu vehiculo se conserve en las mejores condiciones con productos amigables al medio ambiente.
                Contamos con servicio de valet y una red de talleres especializados en:
                <ul>
                    <li>Hojalateria y pintura</li>
                    <li>Reparacion y pintura de rines</li>
                    <li>Lavado de motor</li>
                </ul>
                <br>
                <h5>EAGO realiza personalmente:</h5>
                <ul>
                    <li>Lavado de vestiduras</li>
                    <li>Desinfectado de interiores</li>
                    <li>Pulido y encerado</li>
                </ul>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
  Ver Paquetes
</button>

           </p>
        </div>
      </div>

        <div class="col-md-6">
          <img class="img-fluid" src="<?php echo $url; ?>vistas/images/car/lavado.jpg" alt="">
        </div>
   </div>
   <div class="row">
        <div class="col-lg-3 col-md-6 " data-toggle="modal" data-target="#exampleModal">

         <div class="feature-box-3">
          <div class="icon">
            <i class="glyph-icon flaticon-beetle"></i>
          </div>
          <div class="content">
            <h6>Interior</h6>
            <p></p>
          </div>
         </div>
        </div>

        <div class="col-lg-3 col-md-6 " data-toggle="modal" data-target="#exampleModal">
         <div class="feature-box-3">
          <div class="icon">
            <i class="glyph-icon flaticon-interface-1"></i>
          </div>
          <div class="content" >
            <h6>Exterior</h6>
            <p> </p>
          </div>
         </div>
        </div>

        <div class="col-lg-3 col-md-6 " data-toggle="modal" data-target="#exampleModal">

         <div class="feature-box-3">
          <div class="icon">
            <i class="glyph-icon flaticon-key"></i>
          </div>
          <div class="content">
            <h6>Ambos</h6>
            <p> </p>
          </div>
         </div>
        </div>

      </div>
  </div>
</section>


 footer -->
<?php 
include("footer.php");
 ?>

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content" style="background: url('<?php echo $url; ?>vistas/images/bg-header.png')">
      <div class="modal-header ">
        <h5 class="modal-title text-white" id="exampleModalLabel">Paquetes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="img-fluid" src="<?php echo $url; ?>vistas/images/banners/paquetes.jpg" alt="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


 <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">COTIZA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="CERRAR">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" type="text/javascript" charset="utf-8" async defer></script>
    <div class="container">
        <h2>Datos de contacto</h2>
            <form name="frmContacto" method="post">
            <fieldset class="form-group">

                <div class="form-group">
                        <label for="first_name">Nombre:</label>
                        <input class="form-control" type="text" id="firstName" name="first_name" placeholder="Ingresa tu nombre" >
                </div>

                <div class="form-group">

                        <label for="last_name">Apellido</label>
                        <input class="form-control" type="text" id="last_name" name="last_name" placeholder="Ingresa tu apellido" >
                </div>

                <div class="form-group row">
                    <div class="form-group col">
                    <label for="zipCode">C.P.</label>
                    <input type="number" maxlength="5" id="zipCode" name="zipCode" class="form-control" placeholder="Tu Código  postal">
                    </div>

                    <div class="form-group col">
                    <label for="serv">Servicio que desea</label>
                    <input class="form-control" type="text" id="serv" name="serv" placeholder="Ingresa el servicio">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="form-group col">
                        <label for="email">E-mail</label>
                        <input class="form-control" type="email" id="email" name="email" placeholder="Ingrese su email" value=" ">
                     
                    </div>

                    <div class="form-group col">
                        <label for="telephone">Celular</label>
                        <input class="form-control" type="text" id="telephone" name="telephone" placeholder="Ingrese su numero de celular">
                       
                    </div>
                </div>

                
<button type="submit" value="Enviar" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  enviar
</button>

</form>



<?php
if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "adiazm@eago.com.mx";
$email_subject = "Contacto desde el sitio web";


// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['first_name']) ||
!isset($_POST['last_name']) ||
!isset($_POST['email']) ||
!isset($_POST['telephone']) ||
!isset($_POST['serv']) ||
!isset($_POST['zipCode'])) {


echo "<script language='javascript'>";
echo "alert('Ocurrió un error y el formulario no ha sido enviado')";
echo "</script>"; 

die();
}

$email_message = "Detalles del formulario de contacto:\n\n";

$email_message .= "Nombre: " . $_POST['first_name'] . "\n";
$email_message .= "Apellido: " . $_POST['last_name'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Teléfono: " . $_POST['telephone'] . "\n";
$email_message .= "Alcadia: " . $_POST['serv'] . "\n";
$email_message .= "CP: " . $_POST['zipCode'] . "\n\n";

// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);


echo "<script language='javascript'>";
echo "alert('El correo se ha enviado exitosamente')";
echo "</script>"; 


}
?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
      </div>
    </div>
  </div>
<!-- Modal -->