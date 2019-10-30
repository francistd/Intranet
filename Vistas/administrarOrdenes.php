<!DOCTYPE html>
<html>
<head>
	<title>Administrar Ordenes</title>
	<?php require_once "dependencias.php"; ?>
</head>
<body style="background-color: #000046">
	<?php require_once "menu.php" ?>
	<br><br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-12 rounded alert-secondary " style="background-color: #ECF0F1; margin-bottom: 30px" >
				<h1 class="text-center">Administrar Ordenes <i class="fas fa-cog"></i></h1>
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
				
				<!-- Prueba -->
				<div class="rounded alert-light">
					<table class="table table-sm table-hover">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Solicitante</th>
								<th scope="col">Departamento</th>
								<th scope="col">Descripción</th>
								<th scope="col">Total</th>
								<th scope="col">Autorizado Por:</th>
								<th scope="col">Estado</th>
								<th scope="col">Acción</th>
							</tr>
						</thead>
						<tbody>
							<tr>

								<td><span class="badge badge-secondary"> 1</span>
								</td>
								<td><span class="badge badge-secondary"> Juan Tavarez</span>
								</td>
								<td><span class="badge badge-secondary"> Tecnologia</span>
								</td>
								<td><span class="badge badge-secondary"> compra de Portatil Dell Vostro</span>
								</td>
								<td><span class="badge badge-secondary"> 23,000 RD$</span>
								</td>
								<td><span class="badge badge-secondary"> Yasaili Martinez</span>
								</td>
								<td><span class="badge badge-secondary"> Espera</span>
								</td>

								<td>
									<button class="Edita btn btn-primary btn-sm" style="margin-bottom: 4px"><i class="fas fa-external-link-alt"></i></button>
									<button class="Borra btn btn-danger btn-sm" style="margin-bottom: 4px"><i class="far fa-trash-alt"></i></button>
								</td>

							</tr>
							<tr>
								

								<td><span class="badge badge-secondary"> 2</span>
								</td>
								<td><span class="badge badge-secondary"> Enmanuel Mancebo</span>
								</td>
								<td><span class="badge badge-secondary"> Tecnologia</span>
								</td>
								<td><span class="badge badge-secondary"> Compra de Regleta</span>
								</td>
								<td><span class="badge badge-secondary"> 400 RD$</span>
								</td>
								<td><span class="badge badge-secondary"> Yasaili Martinez</span>
								</td>
								<td><span class="badge badge-secondary"> Aprobada</span>
								</td>

								<td>
									<button class="Edita btn btn-primary btn-sm" style="margin-bottom: 4px"><i class="fas fa-external-link-alt"></i></button>
									<button class="Borra btn btn-danger btn-sm" style="margin-bottom: 4px"><i class="far fa-trash-alt"></i></button>
								</td>
							</tr>
							<tr>
								

								<td><span class="badge badge-secondary"> 3</span>
								</td>
								<td><span class="badge badge-secondary"> Juan Tavarez</span>
								</td>
								<td><span class="badge badge-secondary"> Tecnologia</span>
								</td>
								<td><span class="badge badge-secondary"> compra de Portatil Dell Vostro</span>
								</td>
								<td><span class="badge badge-secondary"> 23,000 RD$</span>
								</td>
								<td><span class="badge badge-secondary"> Yasaili Martinez</span>
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

</body>
</html>