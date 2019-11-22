<?php 
function conexion(){
	$conexion = new mysqli("localhost","root","","intranet");
	if ($conexion->connect_errno) {
		echo "Fallo la Conexion". $conexion->connect_error;
	}
	//Agregamos Encoding para evitar futuros Errores
	$conexion->set_charset("utf8");
	return $conexion;
}

 ?>


 