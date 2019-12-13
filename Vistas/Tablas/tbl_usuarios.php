<?php 

include "../../Procesos/Conexion/conexion.php";
$con = conexion();

$salida ="";

$query = "SELECT Emp.nombre,Emp.apellido,Usu.user_name,Emp.nom_dep, Usu.tipo_usu,Usu.usu_cre,Usu.estado_usu,Usu.id_usu FROM tbl_empleados as Emp INNER JOIN tbl_usuarios as Usu on Emp.id_emp = Usu.id_emp And Usu.activo = 'Si' ORDER BY Usu.id_usu ASC LIMIT 4";

mysqli_set_charset($con,"utf8");

if (isset($_POST['consultaUsu'])) {

    $q= $con->real_escape_string($_POST['consultaUsu']);
    $q2= $con->real_escape_string($_POST['consultaUsu2']);

    $query = "SELECT Emp.nombre,Emp.apellido,Usu.user_name,Emp.nom_dep, Usu.tipo_usu,Usu.usu_cre,Usu.estado_usu,Usu.id_usu FROM tbl_empleados as Emp INNER JOIN tbl_usuarios as Usu on Emp.id_emp = Usu.id_emp where 
    (Emp.nombre LIKE '%".$q."%' OR Emp.apellido LIKE '%".$q."%' )
    AND Emp.nom_dep LIKE '%".$q2."%' AND Usu.activo LIKE '%Si%' ORDER BY Usu.id_usu ASC LIMIT 4";
    
}
$resultado = $con->query($query);

$filasEncontradas = $resultado->num_rows;

if ($resultado->num_rows > 0) {

    echo "<h4 style='text-align: center; margin-left: 5px;'><span class='badge badge-light'><strong>Total:</strong>"." ".$filasEncontradas."</span></h4>";
    
    $salida.="<table class='table table-sm table-hover'>
    <thead>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Usuario</th>
    <th>Departamento</th>
    <th>Tipo Usuario</th>
    <th>Creador</th>
    <th>Estado</th>
    <th>Acción</th>
    </thead>

    <tbody>";

    while ($datos = $resultado->fetch_row()) {
        $salida.="<tr>
        <td><span class='badge badge-secondary'>".$datos[0]."</span></td>
        <td><span class='badge badge-secondary'>".$datos[1]."</span></td>
        <td><span class='badge badge-secondary'>".$datos[2]."</span></td>
        <td><span class='badge badge-secondary'>".$datos[3]."</span></td>
        <td><span class='badge badge-secondary'>".$datos[4]."</span></td>
        <td><span class='badge badge-secondary'>".$datos[5]."</span></td>
        <td><span class='badge badge-secondary'>".$datos[6]."</span></td>
        <td>
        <button class='Edita btn btn-primary btn-sm' style='margin-bottom: 4px' data-toggle='modal' data-target='#EditarUsuario' onclick='agregaUsuParaEdicion(".$datos[7].")'><i class='fas fa-edit'></i></button>
        <button class='Borra btn btn-danger btn-sm' onclick='eliminarDatosUsu(".$datos[7].")' style='margin-bottom: 4px'><i class='far fa-trash-alt'></i></button>
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

