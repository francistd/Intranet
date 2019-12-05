<!DOCTYPE html>
<html>
<head>
	<title>Empleados</title>
	<?php require_once "dependencias.php"; ?>
</head>
<body style="background-color: #000046">
	<?php require_once "menu.php" ?>
	<br><br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-12 rounded alert-secondary " style="background-color: #ECF0F1; margin-bottom: 30px" >
				<h1 class="text-center">Empleados <i class="fas fa-user-tie"></i></h1>
				<!-- Prueba -->
				<div class="col-md-12 mx-auto" style="margin-bottom: 4px">
					<div class="text-center">
						<strong><i class="fas fa-search"></i></strong>
						<label class="text-center">Búsqueda<input type="text" id="buscarVT" name="buscarVT" class="form-control form-control-sm"></label> 

						<strong><i class="fas fa-filter"></i></strong>
						<label>Departamento<select id="estadoEmpDep" name="estadoEmpDep" class=" form-control form-control-sm ">
							<option value="">-Seleccione-</option>
							<option>Dirección</option>
							<option>Contabilidad y Adm</option>
							<option>Creditos y Cobros</option>
							<option>Tecnología</option>
							<option>Capacitación</option>
						</select></label>

						<label><button id="btnBuscEmp" class="buscar_emp btn btn-secondary btn-sm "><i class="fas fa-search"></i> Buscar</button></label>
					</div>
				</div>
				<!-- Prueba -->
				<hr>
				<div class="col-md-12" style="margin-bottom: 4px">
					<div class="text-center">
						<button class=" agregaEmp btn btn-success text-right" data-toggle="modal" data-target="#AgregaEmpleado"><i class="fas fa-plus"></i> </button>
					</div>
				</div>
				<!-- Prueba -->
				<div id="tblEmpleados" class="rounded alert-light">
					
				</div>
				<!-- Prueba -->
			</div>
		</div>
	</div>
	<?php include "Modal/modalEmpleado.php" ?>
<!-- Pie -->
<?php require_once "pie.php" ?>
<!-- Pie -->
</body>
</html>