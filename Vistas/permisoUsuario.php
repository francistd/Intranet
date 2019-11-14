<!DOCTYPE html>
<html>
<head>
	<title>Permisos de Usuario</title>
	<?php require_once "dependencias.php"; ?>
</head>
<body style="background-color: #000046">
	<?php require_once "menu.php" ?>
	<br><br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-12 rounded alert-secondary " style="background-color: #ECF0F1; margin-bottom: 30px" >
				<h1 class="text-center">Permisos de Usuario <i class="fas fa-user-shield"></i></h1>
				<!-- Prueba -->
				<div class="col-md-12 mx-auto" style="margin-bottom: 4px">
					<div class="text-center">
						<strong><i class="fas fa-search"></i></strong>
						<label class="text-center">Búsqueda<input type="text" id="buscarVT" name="buscarVT" class="form-control form-control-sm"></label>
					</div>
				</div>
				<!-- Prueba -->
				<hr>
				<div class="col-md-12" style="margin-bottom: 4px">
					<div class="text-center">
						<button class=" agregaEmp btn btn-success text-right" data-toggle="modal" data-target="#AgregaPermisoUsuario"><i class="fas fa-plus"></i> </button>
					</div>
				</div>
				<!-- Prueba -->
				<div class="rounded alert-light">
					<table class="table table-sm table-hover">
						<thead>
							<tr>
								<th scope="col">Nombre</th>
								<th scope="col">Apellido</th>
								<th scope="col">Usuario</th>
								<th scope="col">Modificado Por:</th>
								<th scope="col">Ultima Modificación</th>
								<th scope="col">Hora Modificación</th>
								<th scope="col">Acción</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><span class="badge badge-secondary"> Juan Francisco</span>
								</td>
								<td><span class="badge badge-secondary"> Tavarez Diaz</span>
								</td>
								<td><span class="badge badge-secondary"> tavarezju</span>
								</td>
								<td><span class="badge badge-secondary"> tavarezju</span>
								</td>
								<td><span class="badge badge-secondary"> 01-11-2019</span>
								</td>
								<td><span class="badge badge-secondary"> 8:30 AM</span>
								</td>

								<td>
									<button class="Edita btn btn-primary btn-sm" data-toggle="modal" data-target="#EditarPermisoUsuario" style="margin-bottom: 4px"><i class="fas fa-external-link-alt"></i></button>
									<button class="Borra btn btn-danger btn-sm" style="margin-bottom: 4px"><i class="far fa-trash-alt"></i></button>
								</td>

							</tr>
							<tr>

								<td><span class="badge badge-secondary"> Jose Enmanuel</span>
								</td>
								<td><span class="badge badge-secondary"> Mancebo Cruz</span>
								</td>
								<td><span class="badge badge-secondary"> manceboj</span>
								</td>
								<td><span class="badge badge-secondary"> tavarezju</span>
								</td>
								<td><span class="badge badge-secondary"> 31-10-2019</span>
								</td>
								<td><span class="badge badge-secondary"> 9:00 AM</span>
								</td>
								

								<td>
									<button class="Edita btn btn-primary btn-sm" style="margin-bottom: 4px"><i class="fas fa-external-link-alt"></i></button>
									<button class="Borra btn btn-danger btn-sm" style="margin-bottom: 4px"><i class="far fa-trash-alt"></i></button>
								</td>
							</tr>
							<tr>

								<td><span class="badge badge-secondary"> Juan Francisco</span>
								</td>
								<td><span class="badge badge-secondary"> Tavarez Diaz</span>
								</td>
								<td><span class="badge badge-secondary"> tavarezju</span>
								</td>
								<td><span class="badge badge-secondary"> tavarezju</span>
								</td>
								<td><span class="badge badge-secondary"> 01-11-2019</span>
								</td>
								<td><span class="badge badge-secondary"> 8:40 AM</span>
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
	<?php include "Modal/modalPermisoUsu.php" ?>
<!-- Pie -->
<?php require_once "pie.php" ?>
<!-- Pie -->
</body>
</html>