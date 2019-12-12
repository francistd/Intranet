<?php 
include "../Conexion/conexion.php";

$con= conexion();
session_start();
date_default_timezone_set("America/Santo_Domingo");
$time = time();

$idEmp =$_POST['select_usu_nom'];
$idDep = $_POST['dep_crea_usu'];
$userName = $_POST['nom_usu_agre'];
$pwd = hash('sha256', $_POST['contraseña_agre']);
$tipoUsu = $_POST['select_tipo_usu'];

$fecha_cre = date('Y-m-d');
$hora_cre = date("g:i A", $time);
$fecha_mod = "0000-00-00";
$usu_cre = $_SESSION['usuario'];
$usu_mod = "N/A";
$hora_mod = "00:00";
$estadoUsu = "Activo";
$estado = "Si";


$datos = array(
	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $idEmp), ENT_QUOTES | ENT_HTML401, "UTF-8")),

	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $idDep), ENT_QUOTES | ENT_HTML401, "UTF-8")),

	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $userName), ENT_QUOTES | ENT_HTML401, "UTF-8")),

	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $pwd), ENT_QUOTES | ENT_HTML401, "UTF-8")),

	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $tipoUsu), ENT_QUOTES | ENT_HTML401, "UTF-8")),

	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $fecha_cre), ENT_QUOTES | ENT_HTML401, "UTF-8")),

	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $hora_cre), ENT_QUOTES | ENT_HTML401, "UTF-8")),

	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $fecha_mod), ENT_QUOTES | ENT_HTML401, "UTF-8")),

	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $usu_cre), ENT_QUOTES | ENT_HTML401, "UTF-8")),

	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $usu_mod), ENT_QUOTES | ENT_HTML401, "UTF-8")),

	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $hora_mod), ENT_QUOTES | ENT_HTML401, "UTF-8")),

	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $estadoUsu), ENT_QUOTES | ENT_HTML401, "UTF-8")),

	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $estado), ENT_QUOTES | ENT_HTML401, "UTF-8"))
);

$sql="INSERT into tbl_usuarios (id_emp,
id_dep,
user_name,
pass,
tipo_usu,
fecha_crea,
hora,
fecha_mod,
usu_cre,
usu_mod,
hora_mod,
estado_usu,
activo)
values (?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt=$con->prepare($sql);
$stmt->bind_param('iisssssssssss',
	$datos[0],
	$datos[1],
	$datos[2],
	$datos[3],
	$datos[4],
	$datos[5],
	$datos[6],
	$datos[7],
	$datos[8],
	$datos[9],
	$datos[10],
	$datos[11],
	$datos[12]);

echo $stmt->execute();
$stmt->close();
$con->close();



 ?>