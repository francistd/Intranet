<!DOCTYPE html>
<html>
<head>
	<title>Solicitud Vacaciones</title>
	<?php require_once "dependencias.php"; ?>
</head>
<body style="background-color: #000046">
	<?php require_once "menu.php" ?>
	<br><br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-12 rounded alert-secondary " style="background-color: #ECF0F1; margin-bottom: 30px" >
				<h1 class="text-center">Solicitud Vacaciones <i class="fas fa-route"></i></h1>
				<!-- Prueba -->
				<div class="col-md-12 mx-auto" style="margin-bottom: 4px">
					<div class="text-center">
						<strong><i class="fas fa-search"></i></strong>
						<label class="text-center">Búsqueda<input type="text" id="buscarVT" name="buscarVT" class="form-control form-control-sm"></label>

						<label><button class="buscar_emp btn btn-secondary btn-sm "><i class="fas fa-search"></i> Buscar</button></label>
					</div>
				</div>
				<!-- Prueba -->
				<hr>
				<div class="col-md-12" style="margin-bottom: 4px">
					<div class="text-center">
						<button class=" agregaEmp btn btn-success text-right" data-toggle="modal" data-target="#AgregaVacaciones"><i class="fas fa-plus"></i> </button>
					</div>
				</div>
				<!-- Prueba -->
				<div class="rounded alert-light">
					<table class="table table-sm table-hover">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nombre</th>
								<th scope="col">Apellido</th>
								<th scope="col">Departamento</th>
								<th scope="col">Fecha Creación</th>
								<th scope="col">Creador</th>
								<th scope="col">Estado</th>
								<th scope="col">Acción</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><span class="badge badge-secondary"> 1</span>
								</td>
								<td><span class="badge badge-secondary"> Juan Francisco</span>
								</td>
								<td><span class="badge badge-secondary"> Tavarez Diaz</span>
								</td>
								<td><span class="badge badge-secondary"> Tecnologia</span>
								</td>
								<td><span class="badge badge-secondary"> 20-10-2019</span>
								</td>
								<td><span class="badge badge-secondary"> tavarezju</span>
								</td>
								<td><span class="badge badge-secondary"> Pendiente</span>
								</td>

								<td>
									<button class="Edita btn btn-primary btn-sm" data-toggle="modal" data-target="#EditarVacaciones" style="margin-bottom: 4px"><i class="fas fa-external-link-alt"></i></button>
									<button class="Borra btn btn-danger btn-sm" style="margin-bottom: 4px"><i class="far fa-trash-alt"></i></button>
								</td>

							</tr>
							<tr>
								<td><span class="badge badge-secondary"> 2</span>
								</td>
								<td><span class="badge badge-secondary"> Jose Enmanuel</span>
								</td>
								<td><span class="badge badge-secondary"> Mancebo Cruz</span>
								</td>
								<td><span class="badge badge-secondary"> Tecnologia</span>
								</td>
								<td><span class="badge badge-secondary"> 29-10-2019</span>
								</td>
								<td><span class="badge badge-secondary"> manceboj</span>
								</td>
								<td><span class="badge badge-secondary"> Aceptada</span>
								</td>

								<td>
									<button class="Edita btn btn-primary btn-sm" style="margin-bottom: 4px"><i class="fas fa-external-link-alt"></i></button>
									<button class="Borra btn btn-danger btn-sm" style="margin-bottom: 4px"><i class="far fa-trash-alt"></i></button>
								</td>
							</tr>
							<tr>
								<td><span class="badge badge-secondary"> 12</span>
								</td>
								<td><span class="badge badge-secondary"> Juan Francisco</span>
								</td>
								<td><span class="badge badge-secondary"> Tavarez Diaz</span>
								</td>
								<td><span class="badge badge-secondary"> Tecnologia</span>
								</td>
								<td><span class="badge badge-secondary"> 15-10-2019</span>
								</td>
								<td><span class="badge badge-secondary"> tavarezju</span>
								</td>
								<td><span class="badge badge-secondary"> Rechazada</span>
								</td>


								<td>
									<button class="Edita btn btn-primary btn-sm" style="margin-bottom: 4px"><i class="fas fa-external-link-alt"></i></button>
									<button class="Borra btn btn-danger btn-sm" style="margin-bottom: 4px"><i class="far fa-trash-alt"></i></button>
								</td>

							</tr>
						</tbody>
					</table>
				</div>
				<!-- Prueba -->
			</div>
		</div>
	</div>
	<?php include "Modal/modalVacaciones.php" ?>
<!-- Pie -->
<?php require_once "pie.php" ?>
<!-- Pie -->
</body>
</html>