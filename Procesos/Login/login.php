<?php 

include "../Conexion/conexion.php";

$con = conexion();
session_start();

$username = $_POST['usuari'];
$password = hash('sha256', $_POST['pwd']);
$id_usu = 0;
$id_emp = 0;
$nom ="";
$ape ="";
$foto = "";

$stmt = $con->prepare("SELECT Usu.id_usu, Usu.id_emp, Usu.user_name, Usu.pass, Emp.nombre, Emp.apellido,Emp.nom_img FROM `tbl_usuarios` as Usu INNER JOIN tbl_empleados as Emp on Usu.id_emp = Emp.id_emp WHERE Usu.user_name = ? and Usu.pass = ?");

$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->bind_result($id_usu,$id_emp,$username,$password,$nom,$ape,$foto);
$stmt->store_result();

            if($stmt->fetch()) //fetching the contents of the row
            {
              $_SESSION['idusu'] = $id_usu;
              $_SESSION['idemp'] = $id_emp;
              $_SESSION['usuario'] = $username;
              $_SESSION['nombre'] = $nom;
              $_SESSION['apellido'] = $ape;
              $_SESSION['foto'] = $foto;
              echo "1";
            }

            else {
              echo "0";
            }

            $stmt->close();
            $con->close();

?>