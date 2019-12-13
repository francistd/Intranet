<?php 
include "../Conexion/conexion.php";

$con= conexion();
session_start();

date_default_timezone_set("America/Santo_Domingo");
	$time = time();

	$tipoUsuEditar = $_POST['tipoUsu_Cre_usu_editar'];
	$estadoUsuEditar = $_POST['estado_Cre_usu_editar'];
	$usu_mod_Editar = $_SESSION['usuario'];
	$fecha_mod_Editar = date('Y-m-d');
	$hora_mod_Editar = date("g:i A", $time);
	$idUsuarioEditar = $_POST['ID_Cre_usu_editar'];

	$datos = array(
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $tipoUsuEditar), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $estadoUsuEditar), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $usu_mod_Editar), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $fecha_mod_Editar), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $hora_mod_Editar), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $idUsuarioEditar), ENT_QUOTES | ENT_HTML401, "UTF-8")),
	);

	$sql="UPDATE tbl_usuarios SET tipo_usu = ?, estado_usu = ?, usu_mod = ?, fecha_mod = ?, hora_mod = ?  WHERE id_usu = ? ";

	$query=$con->prepare($sql);
	$query->bind_param('sssssi',
		$datos[0],
		$datos[1],
		$datos[2],
		$datos[3],
		$datos[4],
		$datos[5]);

	echo $query->execute();
	$query->close();

 ?>