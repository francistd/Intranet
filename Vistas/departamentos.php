<!DOCTYPE html>
<html>
<head>
	<title>Departamento</title>
	<?php require_once "dependencias.php"; ?>
</head>
<body style="background-color: #000046">
	<?php require_once "menu.php" ?>
	<br><br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-12 rounded alert-secondary " style="background-color: #ECF0F1; margin-bottom: 30px" >
				<h1 class="text-center">Departamentos <i class="far fa-building"></i></h1>
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
						<button class="btn btn-primary btn-sm text-right"><i class="fas fa-plus"></i> </button>
					</div>
				</div>
				<!-- Prueba -->
				<div class="rounded alert-light">
					<table class="table table-sm">
						<tbody>
							<tr>
								<td><div class="float-left">
									<img src="../Imagenes/IT.jpg" width="250" height="200" alt="..." class="img-thumbnail">
								</div></td>
								<td><h1><span class="badge badge-secondary"> Tecnología</span></h1></td>
								<td>
									<button class="btn btn-success btn-sm" style="margin-bottom: 4px"><i class="fas fa-edit"></i></button>
									<button class="btn btn-danger btn-sm" style="margin-bottom: 4px"><i class="far fa-trash-alt"></i></button>
								</td>
								
							</tr>
							<tr>
								<td><div class="float-left">
									<img src="../Imagenes/Adm.jpg" width="250" height="200" alt="..." class="img-thumbnail">
								</div></td>
								<td><h1><span class="badge badge-secondary"> Administración</span></h1></td>
								<td>
									<button class="btn btn-success btn-sm" style="margin-bottom: 4px"><i class="fas fa-edit"></i></button>
									<button class="btn btn-danger btn-sm" style="margin-bottom: 4px"><i class="fas fa-trash-alt"></i></button>
								</td>
							</tr>
							<tr>
								<td><div class="float-left">
									<img src="../Imagenes/cap.png" width="250" height="200" alt="..." class="img-thumbnail">
								</div></td>
								<td><h1><span class="badge badge-secondary">Capacitación</span></h1></td>
								<td>
									<button class="btn btn-success btn-sm" style="margin-bottom: 4px"><i class="fas fa-edit"></i></button>
									<button class="btn btn-danger btn-sm" style="margin-bottom: 4px"><i class="fas fa-trash-alt"></i></button>
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