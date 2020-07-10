<body>
<footer class="footer bg-overlay-black-90" style="background-image: url('https://eago.com.mx/Eago-frontend/vistas/images/bg-header.png');">
  <div class="container">
    <div class="row">
     <div class="col-md-12">
      <div class="social" style="margin-bottom: 5px">
        <ul>
          <li class="text-white">
              <a class="facebook" href="https://www.facebook.com/Escuderia-AGO-107694017316744/" target="blank">facebook
                  <i class="fa fa-facebook text-white" ></i> </a>
          </li>

          <li class="text-white">
              <a class="twitter" href="#" target="blank">twitter
                  <i class="fa fa-twitter text-white" ></i> </a>
          </li>

          <li class="text-white">
              <a class="pinterest" href="https://www.instagram.com/escuderia.ago/" target="blank">instagram
                  <i class="fa fa-instagram text-white"></i> </a>
          </li>
        </ul>
       </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 text-center">
        <div class="about-content text-center">
           <h6 class="text-white">Horario de atención</h6>
        </div>
        <div class="address text-center">
          <ul class="text-center">
            <p class="text-center text-white"> <i class="fa fa-map-marker text-center"></i><span>Lunes a viernes de 09:00 a 19:00</span> </p>
            <p class="text-center text-white"> <i class="fa fa-map-marker"></i><span>Sabados 09:00 a 15:00</span> </p>
            <p class="text-center text-white"> <i class="fa fa-phone"></i><span>55 1006 5421</span> </p>
            <p class="text-center text-white"> <i class="fa fa-envelope-o"></i><span>adiazm@eago.com.mx </span> </p>
          </ul>
        </div>
      </div>

    </div>
    <div class="copyright">
     <div class="row">
      <div class="col-lg-6 col-md-12">
       <div class="text-lg-left text-center">
        <p style="color: #fff;">©Copyright 2019 Power BY <a href="" target="_blank">Web Tech</a></p>
       </div>
      </div>
      <div class="col-lg-6 col-md-12">
        <ul class="list-inline text-lg-right text-center">
          <?php
                echo'<li style="color: #fff;"><a href="'.$url.'terminos-y-condiciones"style="color: #fff;">Términos y condiciones </a> |</li> 
          <li style="color: #fff;"><a href="'.$url.'aviso-de-privacidad"style="color: #fff;">Aviso de privacidad </a> |</li>';
             ?>
        </ul>
      </div>
     </div>
    </div>
  </div>


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

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CERRAR</button>
      </div>
    </div>
  </div>

</footer>
</body>