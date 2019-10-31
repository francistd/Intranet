<!DOCTYPE html>
<html>
<head>
	<title>Directorio</title>
	<?php require_once "dependencias.php"; ?>
</head>
<body style="background-color: #000046">
	<?php require_once "menu.php" ?>
	<br><br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-12 rounded alert-secondary " style="background-color: #ECF0F1; margin-bottom: 30px" >
				<h1 class="text-center">Directorio <i class="fas fa-phone-square-alt"></i></h1>
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
								<th scope="col">Nombre</th>
								<th scope="col">Apellido</th>
								<th scope="col">Departamento</th>
								<th scope="col">Movil-Flota</th>
								<th scope="col">Movil-Personal</th>
								<th scope="col">Extension</th>
								<th scope="col">Acción</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><span class="badge badge-secondary"> Juan Francisco</span>
								</td>
								<td><span class="badge badge-secondary"> Tavarez Diaz</span>
								</td>
								<td><span class="badge badge-secondary"> Tecnologia</span>
								</td>
								<td><span class="badge badge-secondary"> 849-402-5485</span>
								</td>
								<td><span class="badge badge-secondary"> 849-402-5485</span>
								</td>
								<td><span class="badge badge-secondary"> 4915</span>
								</td>

								<td>
									<button class="Edita btn btn-primary btn-sm" style="margin-bottom: 4px"><i class="fas fa-external-link-alt"></i></button>
									<button class="Borra btn btn-danger btn-sm" style="margin-bottom: 4px"><i class="far fa-trash-alt"></i></button>
								</td>

							</tr>
							<tr>
								<td><span class="badge badge-secondary"> Jose Enmanuel</span>
								</td>
								<td><span class="badge badge-secondary"> Mancebo Cruz</span>
								</td>
								<td><span class="badge badge-secondary"> Tecnologia</span>
								</td>
								<td><span class="badge badge-secondary"> 849-420-8963</span>
								</td>
								<td><span class="badge badge-secondary"> 809-975-3398</span>
								</td>
								<td><span class="badge badge-secondary"> 4908</span>
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
								<td><span class="badge badge-secondary"> Tecnologia</span>
								</td>
								<td><span class="badge badge-secondary"> 849-402-5485</span>
								</td>
								<td><span class="badge badge-secondary"> 849-402-5485</span>
								</td>
								<td><span class="badge badge-secondary"> 4915</span>
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