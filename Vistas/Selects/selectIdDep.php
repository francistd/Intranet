<?php 
include "../../Procesos/Conexion/conexion.php";

$con= conexion();

// other side

$sql = "SELECT id_dep,nombre_dep FROM tbl_departamento
		WHERE nombre_dep LIKE '%".$_GET['q']."%'
		LIMIT 3"; 
$result = $con->query($sql);
$json = [];
while($row = $result->fetch_assoc()){
     $json[] = ['id'=>$row['id_dep'], 'text'=>$row['nombre_dep']];
}
echo json_encode($json);

?>