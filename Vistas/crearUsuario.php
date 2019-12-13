<!DOCTYPE html>
<html>
<head>
	<title>Crear Usuario</title>
	<?php require_once "dependencias.php"; ?>
</head>
<body style="background-color: #000046">
	<?php require_once "menu.php" ?>
	<br><br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-12 rounded alert-secondary " style="background-color: #ECF0F1; margin-bottom: 30px" >
				<h1 class="text-center">Crear Usuario <i class="fas fa-user-plus"></i></h1>
				<!-- Prueba -->
				<div class="col-md-12 mx-auto" style="margin-bottom: 4px">
					<div class="text-center">
						<strong><i class="fas fa-search"></i></strong>
						<label class="text-center">Búsqueda<input type="text" id="buscarCreaUsu" name="buscarCreaUsu" class="form-control form-control-sm"></label>

						<strong><i class="fas fa-filter"></i></strong>
						<label>Departamento<select id="SelectDepCreUsu" name="SelectDepCreUsu" class=" form-control form-control-sm ">
						</select></label>

						<label><button class="buscar_emp btn btn-secondary btn-sm" id="btnUsuCreaFiltro"><i class="fas fa-search"></i> Buscar</button></label>
					</div>
				</div>
				<!-- Prueba -->
				<hr>
				<div class="col-md-12" style="margin-bottom: 4px">
					<div class="text-center">
						<button class=" agregaEmp btn btn-success text-right" data-toggle="modal" data-target="#AgregaUsuario"><i class="fas fa-plus"></i> </button>
					</div>
				</div>
				<!-- Prueba -->
				<div class="rounded alert-light">
					<div id="tblUsuarios" class="rounded alert-light">
					
				</div>
				</div>
				<!-- Prueba -->
			</div>
		</div>
	</div>
	<?php include "Modal/modalCrearUsu.php" ?>
<!-- Pie -->
<?php require_once "pie.php" ?>
<!-- Pie -->
</body>
</html>