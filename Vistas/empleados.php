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
						<label>Departamento<select id="estado" name="estado" class=" form-control form-control-sm ">
							<option value="">-Seleccione-</option>
							<option>Dirección</option>
							<option>Contabilidad y Administración</option>
							<option>Creditos y Cobros</option>
							<option>Tecnología</option>
							<option>Capacitación</option>
						</select></label>

						<label><button class="buscar_emp btn btn-secondary btn-sm "><i class="fas fa-search"></i> Buscar</button></label>
					</div>
				</div>
				<!-- Prueba -->
				<hr>
				<div class="col-md-12" style="margin-bottom: 4px">
					<div class="text-center">
						<button class=" agregaEmp btn btn-success text-right"><i class="fas fa-plus"></i> </button>
					</div>
				</div>
				<!-- Prueba -->
				<div class="rounded alert-light">
					<table class="table table-sm table-hover">
						<thead>
							<tr>
								<th scope="col">Foto</th>
								<th scope="col">Nombre</th>
								<th scope="col">Apellido</th>
								<th scope="col">Departamento</th>
								<th scope="col">E-mail</th>
								<th scope="col">Posición</th>
								<th scope="col">Teléfono</th>
								<th scope="col">Creador</th>
								<th scope="col">Estado</th>
								<th scope="col">Acción</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="float-left">
										<img src="../Imagenes/IT.jpg" width="100" height="50" alt="..." class="img-thumbnail">
									</div>
								</td>

								<td><span class="badge badge-secondary"> Juan Francisco</span>
								</td>
								<td><span class="badge badge-secondary"> Tavarez Diaz</span>
								</td>
								<td><span class="badge badge-secondary"> Tecnologia</span>
								</td>
								<td><span class="badge badge-secondary"> tavarezju@fondesa.org</span>
								</td>
								<td><span class="badge badge-secondary"> Aistente TI</span>
								</td>
								<td><span class="badge badge-secondary"> 849-402-5485</span>
								</td>
								<td><span class="badge badge-secondary"> tavarezju</span>
								</td>
								<td><span class="badge badge-secondary"> Activo</span>
								</td>

								<td>
									<button class="Edita btn btn-primary btn-sm" style="margin-bottom: 4px"><i class="fas fa-external-link-alt"></i></button>
									<button class="Borra btn btn-danger btn-sm" style="margin-bottom: 4px"><i class="far fa-trash-alt"></i></button>
								</td>

							</tr>
							<tr>
								<td>
									<div class="float-left">
										<img src="../Imagenes/Adm.jpg" width="100" height="50" alt="..." class="img-thumbnail">
									</div>
								</td>

								<td><span class="badge badge-secondary"> Jose Enmanuel</span>
								</td>
								<td><span class="badge badge-secondary"> Mancebo Cruz</span>
								</td>
								<td><span class="badge badge-secondary"> Tecnologia</span>
								</td>
								<td><span class="badge badge-secondary"> manceboj@fondesa.org</span>
								</td>
								<td><span class="badge badge-secondary"> Encargado TI</span>
								</td>
								<td><span class="badge badge-secondary"> 849-402-5485</span>
								</td>
								<td><span class="badge badge-secondary"> tavarezju</span>
								</td>
								<td><span class="badge badge-secondary"> Activo</span>
								</td>

								<td>
									<button class="Edita btn btn-primary btn-sm" style="margin-bottom: 4px"><i class="fas fa-external-link-alt"></i></button>
									<button class="Borra btn btn-danger btn-sm" style="margin-bottom: 4px"><i class="far fa-trash-alt"></i></button>
								</td>
							</tr>
							<tr>
								<td>
									<div class="float-left">
										<img src="../Imagenes/cap.png" width="100" height="50" alt="..." class="img-thumbnail">
									</div>
								</td>

								<td><span class="badge badge-secondary"> Juan Francisco</span>
								</td>
								<td><span class="badge badge-secondary"> Tavarez Diaz</span>
								</td>
								<td><span class="badge badge-secondary"> Tecnologia</span>
								</td>
								<td><span class="badge badge-secondary"> tavarezju@fondesa.org</span>
								</td>
								<td><span class="badge badge-secondary"> Aistente TI</span>
								</td>
								<td><span class="badge badge-secondary"> 849-402-5485</span>
								</td>
								<td><span class="badge badge-secondary"> tavarezju</span>
								</td>
								<td><span class="badge badge-secondary"> Activo</span>
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

</body>
</html>