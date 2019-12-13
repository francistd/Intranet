<?php 

include "../../Procesos/Conexion/conexion.php";
$con = conexion();

$salida ="";

$query = "SELECT nom_img,
nombre,
apellido,
nom_dep,
email,
cargo,
telefono,
usu_cre,
estado_emp,
id_emp FROM tbl_empleados where activo = 'Si'
ORDER BY id_emp ASC LIMIT 4";

mysqli_set_charset($con,"utf8");

if (isset($_POST['consulta'])) {

    $q= $con->real_escape_string($_POST['consulta']);
    $q2= $con->real_escape_string($_POST['consulta2']);

    $query = "SELECT nom_img,
    nombre,
    apellido,
    nom_dep,
    email,
    cargo,
    telefono,
    usu_cre,
    estado_emp,
    id_emp 
    FROM tbl_empleados 
    where 
    (nombre LIKE '%".$q."%' OR apellido LIKE '%".$q."%' )
    AND nom_dep LIKE '%".$q2."%' AND activo LIKE '%Si%' 
    ORDER BY id_emp ASC LIMIT 4";
    
}
$resultado = $con->query($query);
$filasEncontradas = $resultado->num_rows;

if ($resultado->num_rows > 0) {

    echo "<h4 style='text-align: center; margin-left: 5px;'><span class='badge badge-light'><strong>Total:</strong>"." ".$filasEncontradas."</span></h4>";

    $salida.="<table class='table table-sm table-hover'>
    <thead>
    <th>FOTO</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Departamento</th>
    <th>E-mail</th>
    <th>Posición</th>
    <th>Teléfono</th>
    <th>Creador</th>
    <th>Estado</th>
    <th>Acción</th>
    </thead>
    <tbody>";

    while ($datos = $resultado->fetch_row()) {
        $salida.="<tr>
        <td><img src='../Imagenes/Empleados/".$datos[0]."' width='100' height='50'  class='img-thumbnail'></td>
        <td><span class='badge badge-secondary'>".$datos[1]."</span>
        </td>
        <td><span class='badge badge-secondary'>".$datos[2]."</span></td>
        <td><span class='badge badge-secondary'>".$datos[3]."</span></td>
        <td><span class='badge badge-secondary'>".$datos[4]."</span></td>
        <td><span class='badge badge-secondary'>".$datos[5]."</span></td>
        <td><span class='badge badge-secondary'>".$datos[6]."</span></td>
        <td><span class='badge badge-secondary'>".$datos[7]."</span></td>
        <td><span class='badge badge-secondary'>".$datos[8]."</span></td>
        <td>
        <button class='Edita btn btn-primary btn-sm' style='margin-bottom: 4px' data-toggle='modal' data-target='#EditarEmpleado' onclick='agregaEmpParaEdicion(".$datos[9].")'><i class='fas fa-edit'></i></button>
        <button class='Borra btn btn-danger btn-sm' style='margin-bottom: 4px'><i class='far fa-trash-alt'></i></button>
        </td>
        </tr>";
    }
    $salida.='</tbody></table>';

}else{
    $salida.='<h5 style="text-align: center;"><strong><span class="badge badge-secondary">[ No Hay Resultados ]</span></strong></h5>'; 
}

echo $salida;
$con->close();
?>