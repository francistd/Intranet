<?php 

include "../Conexion/conexion.php";

$con= conexion();
$inactivo ="No";
$datos = array(  
  $con->real_escape_string(htmlentities($inactivo)),
  $con->real_escape_string(htmlentities($_POST['id_usu'])),
);

$sql="UPDATE tbl_empleados SET  activo = ?  WHERE id_usu = ? ";

$query=$con->prepare($sql);
$query->bind_param('si',$datos[0],$datos[1]);
echo $query->execute();
$query->close();



 ?>