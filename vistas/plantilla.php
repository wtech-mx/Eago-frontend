<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="title" content="EAGO automotriz - administración de flotillas - gestoría - mecánica - estética automotri - subastas electrónicas">
<meta name="description" content="Somos empresa integrada por un equipo de profesionales con más de 20 años de experiencia en el ramo automotriz, enfocando esfuerzos en la administración de flotillas, gestoría, mecánica y estética automotriz y subastas electrónicas.">
<meta name="keyword" content="EAGO,automotriz,administración de flotillas,gestoría,mecánica,estética automotriz,subastas electrónicas">
<meta name="autor" content="Web Tech" />
<meta name="robots" content="index, follow">
<meta http-equiv="cache-control" content="public">
<meta property="og:url"           content="http://eago.com.mx/" />
<meta property="og:type"          content="EAGO" />
<meta property="og:title"         content="EAGO automotriz - administración de flotillas - gestoría - mecánica - estética automotri - subastas electrónicas" />
<meta property="og:description"   content="Somos empresa integrada por un equipo de profesionales con más de 20 años de experiencia en el ramo automotriz, enfocando esfuerzos en la administración de flotillas, gestoría, mecánica y estética automotriz y subastas electrónicas." />
<meta property="og:image"         content="https://eago.com.mx/Eago-frontend/vistas/images/logo-light.png" />

	<title>Escuderia Ago</title>

	<?php

		//echo '<link rel="icon" href="'.$servidor.$icono["icono"].'">';

		/*=============================================
		MANTENER LA RUTA FIJA DEL PROYECTO
		=============================================*/

		$url = Ruta::ctrRuta();
    	$urlServidor = Ruta::ctrRutaServidor();

		require "admin/config.php";
		require "functions.php";

		$conexion = conexion($bd_config);
		// Obtenemos los post
		$posts = obtener_post($blog_config['post_por_pagina'], $conexion);
		$posts2 = obtener_post($blog_config2['post_por_pagina2'], $conexion);

	?>
	<!--=====================================
	PLUGINS DE CSS
	======================================-->

	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/magnific-popup/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/mega-menu/mega_menu.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/slick/slick.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/revolution/css/settings.css">
	<link rel="stylesheet" href="<?php echo $url; ?>vistas/css/bootstrap.min.css">

	<!--=====================================
	HOJAS DE ESTILO PERSONALIZADAS
	======================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>vistas/css/flaticon.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>vistas/css/style.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>vistas/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>vistas/css/responsive.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>vistas/css/style-customizer.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>vistas/css/boton-flotante.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>vistas/css/pagination.css" />

	<!--=====================================
	PLUGINS DE JAVASCRIPT
	======================================-->
	<!-- jquery  -->
	<script type="text/javascript" src="<?php echo $url; ?>vistas/js/jquery-3.3.1.min.js"></script>
	<!-- bootstrap -->
	<script type="text/javascript" src="<?php echo $url; ?>vistas/js/popper.js"></script>
	<script type="text/javascript" src="<?php echo $url; ?>vistas/js/bootstrap.min.js"></script>
	<!-- mega-menu -->
	<script type="text/javascript" src="<?php echo $url; ?>vistas/js/mega-menu/mega_menu.js"></script>
	<!-- appear -->
	<script type="text/javascript" src="<?php echo $url; ?>vistas/js/jquery.appear.js"></script>
	<!-- counter -->
	<script type="text/javascript" src="<?php echo $url; ?>vistas/js/counter/jquery.countTo.js"></script>
	<!-- owl-carousel -->
	<script type="text/javascript" src="<?php echo $url; ?>vistas/js/owl-carousel/owl.carousel.min.js"></script>
	<!-- isotope -->
	<script type="text/javascript" src="<?php echo $url; ?>vistas/js/isotope/isotope.pkgd.min.js"></script>
	<!-- select -->
	<script type="text/javascript" src="<?php echo $url; ?>vistas/js/select/jquery-select.js"></script>
	<!-- magnific popup -->
	<script type="text/javascript" src="<?php echo $url; ?>vistas/js/magnific-popup/jquery.magnific-popup.min.js"></script>
	<!-- custom -->
	<script type="text/javascript" src="<?php echo $url; ?>vistas/js/custom.js"></script>
	<!-- style customizer  -->
	<script type="text/javascript" src="<?php echo $url; ?>vistas/js/style-customizer.js"></script>
	<!-- revolution -->
	<script type="text/javascript" src="<?php echo $url; ?>vistas/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="<?php echo $url; ?>vistas/revolution/js/jquery.themepunch.revolution.min.js"></script>
	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
	<script type="text/javascript" src="<?php echo $url; ?>vistas/revolution/js/extensions/revolution.extension.actions.min.js"></script>

	<script type="text/javascript" src="<?php echo $url; ?>vistas/revolution/js/extensions/revolution.extension.carousel.min.js"></script>

	<script type="text/javascript" src="<?php echo $url; ?>vistas/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>

	<script type="text/javascript" src="<?php echo $url; ?>vistas/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script type="text/javascript" src="<?php echo $url; ?>vistas/revolution/js/extensions/revolution.extension.migration.min.js"></script>

	<script type="text/javascript" src="<?php echo $url; ?>vistas/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script type="text/javascript" src="<?php echo $url; ?>vistas/revolution/js/extensions/revolution.extension.parallax.min.js"></script>

	<script type="text/javascript" src="<?php echo $url; ?>vistas/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script type="text/javascript" src="<?php echo $url; ?>vistas/revolution/js/extensions/revolution.extension.video.min.js"></script>


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-155385485-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-155385485-1');
	</script>

</head>
<body>

 <div id="loading">
      <div id="loading-center">
          <img src="<?php echo $url;?>vistas/images/logo-animado.gif" alt="<?php echo $url;?>vistas/images/logo-animado.gif" style="width: 150px" width="150px">
     </div>
</div>

<?php

/*=============================================
CABEZOTE
=============================================*/

include "modulos/cabezote.php";

/*=============================================
CONTENIDO DINÁMICO
=============================================*/
$rutas = array();
$ruta = null;

if(isset($_GET["ruta"])){

	$rutas = explode("/", $_GET["ruta"]);

	$item = "ruta";
	$valor =  $rutas[0];

	/*=============================================
	LISTA BLANCA DE URL'S AMIGABLES
	=============================================*/

	if($rutas[0] == "index" || $rutas[0] == "nosotros" || $rutas[0] == "contacto"  || $rutas[0] == "noticias"|| $rutas[0] == "blog" ||  $rutas[0] == "single?id=2" ||  $rutas[0] == "terminos-y-condiciones" || $rutas[0] == "aviso-de-privacidad"){

		include "modulos/".$rutas[0].".php";
//		include "admin/".$rutas[0].".php";

	}elseif ($rutas[0] == "mantenimiento" || $rutas[0] == "estetica" || $rutas[0] == "gestoria" || $rutas[0] == "verificacion" || $rutas[0] == "traslados" || $rutas[0] == "servicios" || $rutas[0] == "subastas") {
		include "modulos/servicios/".$rutas[0].".php";
	}else{

		include "modulos/error404.php";

	}

}else{
	include "modulos/slide.php";
	include "modulos/servicios-index.php";
    include "modulos/tips.php";
	include "modulos/footer.php";
}

?>

<!--=====================================
BOTON FLOTANTE
======================================-->

<script type="text/javascript" style="">
    (function () {
        var options = {
            facebook: "107694017316744", // Facebook page ID
            email: "adiazm@eago.com.mx", // Email
            sms: "5510065421", // Sms phone number
            call: "5510065421", // Call phone number
            company_logo_url: "http://localhost/eago-pag/images/logo-light.png", // URL of company logo (png, jpg, gif)
            greeting_message: "", // Text of greeting message
            call_to_action: "Cotiza ahora", // Call to action
            wa_vb_message: "", // Message for WhatsApp
            button_color: "#00B0B6", // Color of button
            position: "left", // Position may be 'right' or 'left'
            order: "facebook,whatsapp,email,sms,call" // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>

 <!--=================================
 back to top -->

<div class="car-top">
 <span><img src="<?php echo $url; ?>vistas/images/car-eago.png" alt=""></span>
</div>

 <!--=================================
 back to top -->

<input type="hidden" value="<?php echo $url; ?>" id="rutaOculta">
<!--=====================================
JAVASCRIPT PERSONALIZADO
======================================-->

<script src="<?php echo $url; ?>vistas/js/cabezote.js"></script>
<script src="<?php echo $url; ?>vistas/js/plantilla.js"></script>
<script src="<?php echo $url; ?>vistas/js/slide.js"></script>
<script src="<?php echo $url; ?>vistas/js/buscador.js"></script>
<script src="<?php echo $url; ?>vistas/js/infoproducto.js"></script>
<script src="<?php echo $url; ?>vistas/js/usuarios.js"></script>
<script src="<?php echo $url; ?>vistas/js/registroFacebook.js"></script>
<script src="<?php echo $url; ?>vistas/js/carrito-de-compras.js"></script>

<!--=====================================
https://developers.facebook.com/
======================================-->



</body>
</html>