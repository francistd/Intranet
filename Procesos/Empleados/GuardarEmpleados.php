<?php 
include "../Conexion/conexion.php";

$con= conexion();
session_start();
date_default_timezone_set("America/Santo_Domingo");
$time = time();

$rutaAlamacenamiento = $_FILES['file-upload-Emp']['tmp_name'];
$nomImagen = $_FILES['file-upload-Emp']['name'];
$carpeta='../../Imagenes/Empleados/';
$rutafinal = $carpeta.$nomImagen;
move_uploaded_file($rutaAlamacenamiento,$rutafinal);

$nom =$_POST['nombre_emp'];
$ape = $_POST['apellido_emp'];
$dep_emp = $_POST['select_dep_emp'];
$email = $_POST['correo_emp'];
$direccion = $_POST['direccion_emp'];
$genero = $_POST['select_emp_genero'];
$cargo = $_POST['posicion_emp'];
$tel = $_POST['telefono_emp'];
$fecha_nac = $_POST['fecha_nac_emp'];
$fecha_cre = date('Y-m-d');
$hora_cre = date("g:i A", $time);
$usu_cre = $_SESSION['usuario'];
$usu_mod = "N/A";
$fecha_mod = "0000-00-00";
$hora_mod = "00:00";
$estado = "Si";
$estadoEmp = "Activo";




$datos = array(
	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $nom), ENT_QUOTES | ENT_HTML401, "UTF-8")),
	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $ape), ENT_QUOTES | ENT_HTML401, "UTF-8")),
	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $nomImagen), ENT_QUOTES | ENT_HTML401, "UTF-8")),
	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $dep_emp), ENT_QUOTES | ENT_HTML401, "UTF-8")),
	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $email), ENT_QUOTES | ENT_HTML401, "UTF-8")),
	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $direccion), ENT_QUOTES | ENT_HTML401, "UTF-8")),
	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $genero), ENT_QUOTES | ENT_HTML401, "UTF-8")),
	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $cargo), ENT_QUOTES | ENT_HTML401, "UTF-8")),
	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $tel), ENT_QUOTES | ENT_HTML401, "UTF-8")),
	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $fecha_nac), ENT_QUOTES | ENT_HTML401, "UTF-8")),
	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $fecha_cre), ENT_QUOTES | ENT_HTML401, "UTF-8")),
	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $hora_cre), ENT_QUOTES | ENT_HTML401, "UTF-8")),
	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $usu_cre), ENT_QUOTES | ENT_HTML401, "UTF-8")),
	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $usu_mod), ENT_QUOTES | ENT_HTML401, "UTF-8")),
	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $fecha_mod), ENT_QUOTES | ENT_HTML401, "UTF-8")),
	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $hora_mod), ENT_QUOTES | ENT_HTML401, "UTF-8")),
	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $estado), ENT_QUOTES | ENT_HTML401, "UTF-8")),
	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $estadoEmp), ENT_QUOTES | ENT_HTML401, "UTF-8"))
);

$sql="INSERT into tbl_empleados (nombre,
apellido,
nom_img,
nom_dep,
email,
direccion,
genero,
cargo,
telefono,
fecha_nac,
fecha_cre_emp,
hora,
usu_cre,
usu_mod,
fecha_mod,
hora_mod,
activo,
estado_emp)
values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt=$con->prepare($sql);
$stmt->bind_param('ssssssssssssssssss',
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
	$datos[12],
	$datos[13],
	$datos[14],
	$datos[15],
	$datos[16],
	$datos[17]);

echo $stmt->execute();
$stmt->close();
$con->close();

?>








