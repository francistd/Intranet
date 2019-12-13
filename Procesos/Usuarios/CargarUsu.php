<?php 
include "../Conexion/conexion.php";

$con= conexion();
$id=$con->real_escape_string(htmlentities($_POST['idu']));

$sql="SELECT Usu.id_usu,Emp.nombre,Emp.apellido,Emp.nom_dep,Usu.user_name,Usu.tipo_usu,Usu.fecha_crea,Usu.hora,Usu.fecha_mod,Usu.usu_cre,Usu.usu_mod,Usu.hora_mod, Usu.estado_usu FROM tbl_empleados as Emp INNER JOIN tbl_usuarios as Usu on Emp.id_emp = Usu.id_emp where Usu.id_usu = ? ORDER BY Usu.id_usu ASC";

$query=$con->prepare($sql);
$query->bind_param('i',$id);
$query->execute();

$datos= $query->get_result()->fetch_array();

echo json_encode($datos);

?>