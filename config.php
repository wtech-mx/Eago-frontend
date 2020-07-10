<?php

define('RUTA', 'http://localhost/Eago-frontend/blog/');
//define('RUTA', 'https://eago.com.mx/blog/');

//DB TRABJANDO EN LOCALHOST
$bd_config = array(
	'basedatos' => 'taller_eago',
	'usuario' => 'root',
	'pass' => ''
);

//DB TRABJANDO EN EL SERVIDOR
//
//$bd_config = array(
//	'basedatos' => 'taller_eago',
//	'usuario' => 'eagotaller',
//	'pass' => 'eago19taller'
//);

$blog_config = array(
	'post_por_pagina'=> '3',
	'carpeta_imagenes' => 'imagenes/'
);

$blog_config2 = array(
	'post_por_pagina2'=> '16',
	'carpeta_imagenes' => 'imagenes/'
);

$blog_admin = array(
	'usuario' => 'Carlos',
	'password' => '123'
);

?>
