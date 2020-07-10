<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" type="text/javascript" charset="utf-8" async defer></script>
    <div class="container">
        <h2>Datos de contacto</h2>
            <form name="frmContacto" method="post">
            <fieldset class="form-group">

                <div class="form-group">
                    <label for="zipCode">C.P.</label>
                    <input type="number" maxlength="5" id="zipCode" name="zipCode" class="form-control" placeholder="Tu Código postal">
                   
                </div>

                <div class="form-group">
                    <label for="locationTxt">Colonia o Delegación</label>
                    <input class="form-control" type="text" id="locationTxt" name="locationTxt" placeholder="Ingresa tu Colonia o Delegación">
                </div>

                <div class="form-group row">
                    <div class="form-group col">
                        <label for="first_name">Nombre:</label>
                        <input class="form-control" type="text" id="firstName" name="first_name" placeholder="Ingresa tu nombre" >
                    </div>

                    <div class="form-group col">
                        <label for="last_name">Apellido</label>
                        <input class="form-control" type="text" id="last_name" name="last_name" placeholder="Ingresa tu apellido" >
                    </div>
                </div>

                <div class="form-group row">
                    <div class="form-group col">
                        <label for="email">E-mail</label>
                        <input class="form-control" type="email" id="email" name="email" placeholder="Ingrese su email" value=" ">
                     
                    </div>

                    <div class="form-group col">
                        <label for="telephone">Celular</label>
                        <input class="form-control" type="text" id="telephone" name="telephone" placeholder="Ingrese su número de celular">
                       
                    </div>
                </div>

                <div class="form-group row">
                    <div class="form-group col">
                    <label for="trabajo">¿Qué tipo de servicio necesita?</label>
                    <select id="trabajo" name="trabajo" class="form-control">
                        <option value="" selected=""   disabled="">Seleccione una opción</option>
                        <option value="Reparación" name="Reparación">Reparación</option>
                        <option value=" Nueva-instalación" name="Nueva-instalación">Nueva-instalación</option>
                        <option value="Otro">Otro</option>
                    </select>
                </div>
                </div>

                <div class="form-group row">
                    <div class="form-group col">
                    <label for="lugar">¿Donde se va a hacer el trabajo?</label>
                    <select id="lugar" name="lugar" class="form-control">
                        <option value="" selected="" disabled="">Seleccione una opción</option>
                        <option value="Casa">Casa</option>
                        <option value="Departamento">Departamento</option>
                        <option value="Comercio">Comercio</option>
                        <option value="Otro">Otro</option>
                    </select>
                </div>
                </div>

                <fieldset class="form-group row">
                    <div class="form-group col">
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="file" name="file">
                            <label class="custom-file-label" for="file" accept=".zip">Subir foto</label>
                        </div>
                    </div>

<!--                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="promo" name="promo">
                        <small class="form-check-label" for="promo">Deseo recibir ofertas especiales, promociones y descuentos a través de correos electrónicos</small>
                      </div>-->
                    </div>
                </fieldset>
                
<button type="submit" value="Enviar" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Enviar
</button>

</form>



<?php
if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "samm.arquitectura@hotmail.com";
$email_subject = "Contacto desde el sitio web";




    $trabajo=$_POST["trabajo"];
        for ($i=0;$i<count($trabajo);$i++) { 
            if(isset($_POST['trabajo']));
            }

    $lugar=$_POST["lugar"];

        for ($i=0;$i<count($lugar);$i++) { 
            if(isset($_POST['lugar']));
            }

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['first_name']) ||
!isset($_POST['last_name']) ||
!isset($_POST['email']) ||
!isset($_POST['telephone']) ||
!isset($_POST['locationTxt']) ||
!isset($_POST['file']) ||
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
$email_message .= "Alcadia: " . $_POST['locationTxt'] . "\n";
$email_message .= "CP: " . $_POST['zipCode'] . "\n\n";
$email_message .= "Trabajo: " . $_POST['trabajo'] . "\n\n";
$email_message .= "Lugar: " . $_POST['lugar'] . "\n\n";
$email_message .= "archivo: " . $_POST['file'] . "\n\n";

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
