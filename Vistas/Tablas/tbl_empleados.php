<?php 

include "../../Procesos/Conexion/conexion.php";
$con = conexion();

$salida ="";

$query = "SELECT F.nombre_img, Emp.nombre, Emp.apellido,Dep.nombre_dep,Emp.email,Emp.cargo,Emp.telefono,Emp.usu_cre,Emp.estado_emp, Emp.id_emp FROM tbl_imagenes as F INNER JOIN tbl_empleados as Emp on F.id_emp = Emp.id_emp INNER JOIN tbl_departamento as Dep on Emp.id_dep = Dep.id_dep ORDER BY Emp.id_emp ASC LIMIT 4";

mysqli_set_charset($con,"utf8");

if (isset($_POST['consulta'])) {

    $q= $con->real_escape_string($_POST['consulta']);
    $q2= $con->real_escape_string($_POST['consulta2']);

    $query = "SELECT F.nombre_img, Emp.nombre, Emp.apellido,Dep.nombre_dep, Emp.email,Emp.cargo,Emp.telefono,Emp.usu_cre,Emp.estado_emp,Emp.id_emp FROM tbl_imagenes as F INNER JOIN tbl_empleados as Emp on F.id_emp = Emp.id_emp INNER JOIN tbl_departamento as Dep on Emp.id_dep = Dep.id_dep where ( Emp.nombre LIKE '%".$q."%' OR Emp.apellido LIKE '%".$q."%' ) AND Dep.nombre_dep LIKE '%".$q2."%'  ORDER BY Emp.id_emp ASC LIMIT 4";
    
}
$resultado = $con->query($query);

if ($resultado->num_rows > 0) {
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
    $salida.='<h5><strong>[ No Hay Resultados ]</strong></h5>'; 
}

echo $salida;
$con->close();
?>


