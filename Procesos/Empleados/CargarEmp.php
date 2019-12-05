<?php 
include "../Conexion/conexion.php";

$con= conexion();
$id=$con->real_escape_string(htmlentities($_POST['idu']));
$sql="SELECT F.nombre_img,Emp.id_emp, Emp.nombre, Emp.apellido,Dep.nombre_dep, Emp.email,Emp.direccion,Emp.genero, Emp.cargo,Emp.telefono,Emp.fecha_nac,Emp.fecha_cre_emp,Emp.hora,Emp.usu_cre,Emp.usu_mod,Emp.fecha_mod,Emp.hora_mod,Emp.estado_emp FROM tbl_imagenes as F INNER JOIN tbl_empleados as Emp on F.id_emp = Emp.id_emp INNER JOIN tbl_departamento as Dep on Emp.id_dep = Dep.id_dep where Emp.id_emp = ? ORDER BY Emp.id_emp ASC";
$query=$con->prepare($sql);
$query->bind_param('i',$id);
$query->execute();

$datos= $query->get_result()->fetch_array();

echo json_encode($datos);



?>