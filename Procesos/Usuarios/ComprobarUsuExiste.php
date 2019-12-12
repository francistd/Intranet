<?php 
include "../Conexion/conexion.php";

$con= conexion();
$nomUsu=$con->real_escape_string(htmlentities($_POST['nom_usu']));

$stmt = $con->prepare("SELECT user_name FROM tbl_usuarios where user_name = '$nomUsu' ") or die(mysqli_error());
    if($stmt->execute()){
        $result = $stmt->get_result();
        $num_rows = $result->num_rows;
    }
    if($num_rows == 1){
    	echo 1;
    }else{
    	echo 0;
    }

?>