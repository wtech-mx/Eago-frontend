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

//Slide conexion and fuction//
function con(){
  return new mysqli("localhost","root","","taller_eago");
  //return new mysqli("localhost","eagotaller","","taller_eago");
}

function insert_img($title, $folder, $image){
  $con = con();
  $con->query("INSERT INTO slide (title, folder,src,created_at) value (\"$title\",\"$folder\",\"$image\",NOW())");
}

function get_imgs(){
  $images = array();
  $con = con();
  $query=$con->query("SELECT * FROM slide order by created_at desc");

  while($r=$query->fetch_object()){
    $images[] = $r;
  }
  return $images;
}

function get_img($id){
  $image = null;
  $con = con();
  $query=$con->query("select * from slide where id=$id");

  while($r=$query->fetch_object()){
    $image = $r;
  }

  return $image;
}

function del($id){
  $con = con();
  $con->query("delete from slide where id=$id");
}

 $images = get_imgs();

?>

