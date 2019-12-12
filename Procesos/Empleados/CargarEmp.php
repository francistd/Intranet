<?php 
include "../Conexion/conexion.php";

$con= conexion();
$id=$con->real_escape_string(htmlentities($_POST['idu']));
$sql="SELECT nom_img,id_emp, nombre,apellido,nom_dep,email,direccion,genero,cargo,telefono,fecha_nac,fecha_cre_emp,hora,usu_cre,usu_mod,fecha_mod,hora_mod,estado_emp FROM tbl_empleados where id_emp = ? ORDER BY id_emp ASC";

$query=$con->prepare($sql);
$query->bind_param('i',$id);
$query->execute();

$datos= $query->get_result()->fetch_array();

echo json_encode($datos);



?>