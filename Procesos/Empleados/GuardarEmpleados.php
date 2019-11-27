<?php 
include "../Conexion/conexion.php";
$con= conexion();
session_start();
date_default_timezone_set("America/Santo_Domingo");
$time = time();

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


$datos = array(
	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $nom), ENT_QUOTES | ENT_HTML401, "UTF-8")),
	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $ape), ENT_QUOTES | ENT_HTML401, "UTF-8")),
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
	$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $estado), ENT_QUOTES | ENT_HTML401, "UTF-8"))
);


$con->begin_transaction();

try {

	$sql="INSERT into tbl_empleados (nombre,
	apellido,
	id_dep,
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
	activo)
	values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
	$stmt=$con->prepare($sql);
	$stmt->bind_param('ssisssssssssssss',
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
		$datos[15]);

	echo $stmt->execute();
	$ultimoID = mysqli_insert_id($con);

// Second Insert
	$id_usu_img = 0;
	$id_emp_img = $ultimoID;
	$nombreImg = $_FILES['img']['name'];
	// $rutaAlamacenamiento = $_FILES['img']['tmp_name'];
	$carpeta='../../Imagenes/Empleados/';
	$rutaFinal=$carpeta.$nombreImg;
	$fecha_subida_img = date('Y-m-d');
	$fecha_mod_img = "0000-00-00";
	$usu_cre_img = $_SESSION['usuario'];
	$usu_mod_img = "N/A";
	$activo_img = "Si";


	$datos2 = array(
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $id_usu_img), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $id_emp_img), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $nombreImg), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $rutaFinal), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $fecha_subida_img), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $fecha_mod_img), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $usu_cre_img), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $usu_mod_img), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $activo_img), ENT_QUOTES | ENT_HTML401, "UTF-8")),
	);

	;

	if (move_uploaded_file($_FILES['img']['tmp_name'], $datos2[3])) {
		$sql = "INSERT into tbl_imagenes (id_usu,
		id_emp,
		nombre_img,
		ruta,
		fecha_Subida,
		fecha_mod_img,
		usu_crea,
		usu_mod,
		activo) values (?,?,?,?,?,?,?,?,?)";
		$stmt=$con->prepare($sql);
		$stmt->bind_param('iisssssss',
			$datos2[0],
			$datos2[1],
			$datos2[2],
			$datos2[3],
			$datos2[4],
			$datos2[5],
			$datos2[6],
			$datos2[7],
			$datos2[8]);

		echo $stmt->execute();

		$con->commit();

		$stmt->close();

		$con->close();
	}else {
		echo "0";
	}


	
} catch (Exception $e) {
	$con->rollback();
	echo $e->getMessage();
}

?>








