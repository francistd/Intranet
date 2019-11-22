<!DOCTYPE html>
<html>
<head>
	<title>Lema</title>
	<?php require_once "dependencias.php"; ?>
</head>
<body>
	<?php require_once "menu.php" ?>
	<br><br><br><br>
	<div class="container">
		<div class="row">
			<!-- Prueba -->
			<div class="col-md-12 rounded alert-secondary " style="background-color: #ECF0F1; margin-bottom: 50px" >
				<h1 class="text-center">Lema <i class="fas fa-book-open"></i></h1>
				<!-- Cabecera -->
				<div class="container" > 
					<div class="col-md-12 mx-auto" style="margin-bottom: 4px">

					</div>
				</div>
				<!-- Cabecera -->
				<hr>
				<div class="col-md-12" style="margin-bottom: 4px">
					<div class="text-center">
						<button class="btn btn-success  text-right b" data-toggle="modal" data-target="#AgregaLema"><i class="fas fa-plus"></i> </button>
					</div>
				</div>

				<!-- btn Mas -->
				<div class="col-md-12" style="margin-bottom: 4px">
					<div class="rounded alert-light">
					<table class="table table-sm table-hover">
						<thead>
							<tr>
								<th scope="col">Lema</th>
								<th scope="col">Fecha Creación</th>
								<th scope="col">Usuario Creador</th>
								<th scope="col">Hora Creación</th>
								<th scope="col">Acción</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><span class="badge badge-secondary"> Trabajo en equipo</span>
								</td>
								<td><span class="badge badge-secondary"> 01-11-2019</span>
								</td>
								<td><span class="badge badge-secondary"> tavarezju</span>
								</td>
								<td><span class="badge badge-secondary"> 8:30 AM</span>
								</td>

								<td>
									<button class="Edita btn btn-primary btn-sm" data-toggle="modal" data-target="#EditarPermisoUsuario" style="margin-bottom: 4px"><i class="fas fa-external-link-alt"></i></button>
									<button class="Borra btn btn-danger btn-sm" style="margin-bottom: 4px"><i class="far fa-trash-alt"></i></button>
								</td>

							</tr>
							<tr>

								<td><span class="badge badge-secondary"> Trabajo en equipo</span>
								</td>
								<td><span class="badge badge-secondary"> 01-11-2019</span>
								</td>
								<td><span class="badge badge-secondary"> tavarezju</span>
								</td>
								<td><span class="badge badge-secondary"> 8:30 AM</span>
								</td>
								

								<td>
									<button class="Edita btn btn-primary btn-sm" style="margin-bottom: 4px"><i class="fas fa-external-link-alt"></i></button>
									<button class="Borra btn btn-danger btn-sm" style="margin-bottom: 4px"><i class="far fa-trash-alt"></i></button>
								</td>
							</tr>
							<tr>

								<td><span class="badge badge-secondary"> Trabajo en equipo</span>
								</td>
								<td><span class="badge badge-secondary"> 01-11-2019</span>
								</td>
								<td><span class="badge badge-secondary"> tavarezju</span>
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
				</div>
				<!-- btn Mas -->
				
				<hr>
				<!-- Pruebaa -->
				<!-- Pruebaa -->
			</div>
			
		</div>
	</div>
	<?php include "Modal/modalLema.php" ?>
<!-- Pie -->
<?php require_once "pie.php" ?>
<!-- Pie -->
</body>
</html>