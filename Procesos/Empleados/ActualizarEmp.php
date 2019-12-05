<?php 
include "../Conexion/conexion.php";

$con= conexion();
session_start();

if (isset($_FILES['file-upload-Editar-Emp']['name'])) {

// Inicia
	$image = $_POST['img'];

	$rutaAlamacenamiento = $_FILES['file-upload-Editar-Emp']['tmp_name'];
	$nom = $_FILES['file-upload-Editar-Emp']['name'];
	$carpeta='../../Imagenes/Empleados/';
	$rutafinal = $carpeta.$nom;

	unlink($image);
	move_uploaded_file($rutaAlamacenamiento,$rutafinal);

	$datos = array(
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $nom), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(htmlentities($_POST['idImg'])),
	);

	$sql="UPDATE tbl_imagenes SET nombre_img = ? WHERE id_emp = ? ";

	$query=$conexion->prepare($sql);
	$query->bind_param('si',$datos[0],$datos[1]);
	echo $query->execute();
	$query->close();


// Segundo Stament
	date_default_timezone_set("America/Santo_Domingo");
	$time = time();

	$nom_Edit = $_POST['nombre_empU'];
	$ape_Edit = $_POST['apellido_empU'];
	$departamento_Edit = $_POST['select_dep_empU'];
	$corre_Edit = $_POST['correo_empU'];
	$direccion_Edit = $_POST['direccion_empU'];
	$genero_Edit = $_POST['select_emp_generoU'];
	$posicion_Edit = $_POST['posicion_empU'];
	$tel_Edit = $_POST['telefono_empU'];
	$fecha_nac_Edit = $_POST['fecha_nac_empU'];
	$usu_mod_Edit = $_SESSION['usuario'];
	$fecha_mod_Edit = date('Y-m-d');
	$hora_mod_Edit = date("g:i A", $time);
	$estado_Edit = $_POST['estado_emp'];
	$idEmpleado = $_POST['idImg'];

	$datos2 = array(
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $nom_Edit), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(htmlentities($ape_Edit)),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $departamento_Edit), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $corre_Edit), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $direccion_Edit), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $genero_Edit), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $posicion_Edit), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $tel_Edit), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $fecha_nac_Edit), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $usu_mod_Edit), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $fecha_mod_Edit), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $hora_mod_Edit), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $estado_Edit), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $idEmpleado), ENT_QUOTES | ENT_HTML401, "UTF-8")),
	);

	$sql="UPDATE tbl_empleados SET nombre = ?, apellido = ?, id_dep = ?, email = ?, direccion = ?, genero = ?, cargo = ?, telefono = ?, fecha_nac = ?, usu_mod = ?, fecha_mod = ?, hora_mod = ?, estado_emp = ?  WHERE id_emp = ? ";

	$query=$conexion->prepare($sql);
	$query->bind_param('ssissssssssssi',
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
	$datos[13]);

	echo $query->execute();
	$query->close();
// Termina

}else {

	date_default_timezone_set("America/Santo_Domingo");
	$time = time();

	$nom_Edit = $_POST['nombre_empU'];
	$ape_Edit = $_POST['apellido_empU'];
	$departamento_Edit = $_POST['select_dep_empU'];
	$corre_Edit = $_POST['correo_empU'];
	$direccion_Edit = $_POST['direccion_empU'];
	$genero_Edit = $_POST['select_emp_generoU'];
	$posicion_Edit = $_POST['posicion_empU'];
	$tel_Edit = $_POST['telefono_empU'];
	$fecha_nac_Edit = $_POST['fecha_nac_empU'];
	$usu_mod_Edit = $_SESSION['usuario'];
	$fecha_mod_Edit = date('Y-m-d');
	$hora_mod_Edit = date("g:i A", $time);
	$estado_Edit = $_POST['estado_emp'];
	$idEmpleado = $_POST['idImg'];

	$datos2 = array(
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $nom_Edit), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(htmlentities($ape_Edit)),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $departamento_Edit), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $corre_Edit), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $direccion_Edit), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $genero_Edit), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $posicion_Edit), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $tel_Edit), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $fecha_nac_Edit), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $usu_mod_Edit), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $fecha_mod_Edit), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $hora_mod_Edit), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $estado_Edit), ENT_QUOTES | ENT_HTML401, "UTF-8")),
		$con->real_escape_string(html_entity_decode(str_replace("\r\n", '', $idEmpleado), ENT_QUOTES | ENT_HTML401, "UTF-8")),
	);

	$sql="UPDATE tbl_empleados SET nombre = ?, apellido = ?, id_dep = ?, email = ?, direccion = ?, genero = ?, cargo = ?, telefono = ?, fecha_nac = ?, usu_mod = ?, fecha_mod = ?, hora_mod = ?, estado_emp = ?  WHERE id_emp = ? ";

	$query=$conexion->prepare($sql);
	$query->bind_param('ssissssssssssi',
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
	$datos[13]);

	echo $query->execute();
	$query->close();
}


?> 