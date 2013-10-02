<?php
header('Content-Type: text/txt; charset=ISO-8859-1');
$respuesta=array();

$estado=0;
$texto='';


if($_REQUEST["nick"]=="Manuel" && $_REQUEST["pass"]=="72Manu"){
	$estado=0;
	$texto='';
}

else if($_REQUEST["nick"]!="Manuel" && $_REQUEST["pass"]=="72Manu"){
	$estado=-1;
	$texto='El nombre de usuario es INCORRECTO!';
}

else if($_REQUEST["nick"]=="Manuel" && $_REQUEST["pass"]!="72Manu"){
	$estado=-2;
	$texto='El password de usuario es INCORRECTO!';
}

else if($_REQUEST["nick"]=="" || $_REQUEST["pass"]==""){
	$estado=-3;
	$texto='Debe rellenar todos los campos';
}
else {
	$estado=-4;
	$texto='Los campos son incorrectos';
}




$respuesta["estado"]=$estado;
$respuesta["texto"]=$texto;


echo json_encode($respuesta);

?>

