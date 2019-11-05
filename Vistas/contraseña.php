<!DOCTYPE html>
<html>
<head>
	<title>Contraseña</title>
	<?php require_once "dependencias.php"; ?>
</head>
<body style="background-color: #000046">
	<?php require_once "menu.php" ?>
	<br><br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-12 rounded alert-secondary " style="background-color: #ECF0F1; margin-bottom: 30px" >
				<h1 class="text-center">Contraseña <i class="fas fa-key"></i></h1>
				<!-- Prueba -->
				<div class="col-md-12 mx-auto" style="margin-bottom: 4px">
					<div class="text-center">
						<strong><i class="fas fa-search"></i></strong>
						<label class="text-center">Búsqueda<input type="text" id="buscarVT" name="buscarVT" class="form-control form-control-sm"></label>
					</div>
				</div>
				<!-- Prueba -->
				<hr>
				
				<!-- Prueba -->
				<div class="rounded alert-light">
					<table class="table table-sm table-hover">
						<thead>
							<tr>
								<th scope="col">Nombre</th>
								<th scope="col">Apellido</th>
								<th scope="col">Usuario</th>
								<th scope="col">Contraseña</th>
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
								<td><span class="badge badge-secondary"> 256ce461e1dc9cf</span>
								</td>
								<td><span class="badge badge-secondary"> tavarezju</span>
								</td>
								<td><span class="badge badge-secondary"> 01-11-2019</span>
								</td>
								<td><span class="badge badge-secondary"> 8:30 AM</span>
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
<!-- Pie -->
<?php require_once "pie.php" ?>
<!-- Pie -->
</body>
</html>