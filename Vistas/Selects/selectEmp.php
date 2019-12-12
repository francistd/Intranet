<?php 
include "../../Procesos/Conexion/conexion.php";

$con= conexion();

// other side

$sql = "SELECT id_emp,nombre,apellido FROM tbl_empleados
		WHERE nombre LIKE '%".$_GET['q']."%'
		LIMIT 3"; 
$result = $con->query($sql);
$json = [];
while($row = $result->fetch_assoc()){
     $json[] = ['id'=>$row['id_emp'], 'text'=>$row['nombre']." ".$row['apellido']];
}
echo json_encode($json);

?>

