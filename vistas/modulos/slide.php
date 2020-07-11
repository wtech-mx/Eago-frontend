<?php
$active="active";
$DB_HOST="localhost";//Servidor donde se encuentra alojada nuestra base de datos
$DB_NAME= "taller_eago";// Nombre de la base de datos
$DB_USER= "root";//Usuario de la base de datos
$DB_PASS= "";//Contraseña del usuario de la base de datos
	# conectare la base de datos
    $con=@mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
?>

<div id="myCarousel" class="carousel sl slide carousel-fade" data-ride="carousel" style="">
				<?php
					$sql_slider=mysqli_query($con,"select * from slider where estado=1 order by orden");
					$nums_slides=mysqli_num_rows($sql_slider);
				?>
				<?php
					$active="active";
					while ($rw_slider=mysqli_fetch_array($sql_slider)){
				?>



                <div  class="carousel-item <?php echo $active;?>" style="background-color:<?php echo $rw_slider['color'];?>">
                  <div class="mask flex-center">
                    <div class="container" style="margin-top:8%;">
                      <div class="row align-items-center">
                        <div class="col-md-7 col-12 order-md-1 order-2">
                          <h4><?php echo $rw_slider['titulo'];?></h4>
                          <p><?php echo $rw_slider['descripcion'];?></p>
                          <a class='btn btn-<?php echo $rw_slider['estilo_boton'];?> text-right' href="<?php echo $rw_slider['url_boton'];?>"><?php echo $rw_slider['texto_boton'];?></a>
                        </div>

                        <div class="col-md-5 col-12 order-md-2 order-1">
                            <img class="mx-auto"  alt="<?php echo $urlServidor;?>view/img/slider/<?php echo $rw_slider['url_image'];?>" src=" <?php echo $urlServidor;?>view/img/slider/<?php echo $rw_slider['url_image'];?>" data-holder-rendered="true">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

    						<?php
						$active="";
					}
				?>

  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
  </a>

    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>

