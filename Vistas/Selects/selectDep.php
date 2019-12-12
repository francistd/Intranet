<?php 
include "../../Procesos/Conexion/conexion.php";

$con= conexion();
$sql="SELECT nombre_dep FROM tbl_departamento ";
$stmt=$con->prepare($sql);
$stmt-> execute(); 
$stmt-> store_result(); 
$stmt-> bind_result($nom_dep);

echo "<option value='' selected >-Seleccione-</option>";

while ($stmt->fetch()) { 

?>

<option value="<?php echo $nom_dep ?>"><?php echo $nom_dep ?></option>

<?php 
} 

$stmt->close();
$con->close(); 

?>