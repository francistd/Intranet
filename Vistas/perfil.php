<!DOCTYPE html>
<html>
<head>
	<title>Perfil</title>
	<?php require_once "dependencias.php"; ?>
</head>
<body style="background-color: #000046">
	<?php require_once "menu.php" ?>
	<br><br><br><br>
	<div class="container">
		<div class="row">
			<div class="col-md-12 rounded alert-secondary " style="background-color: #ECF0F1; margin-bottom: 50px" >
				<h1 class="text-center">Perfil <i class="far fa-id-card"></i></h1>
				<hr>
				<!-- Prueba -->
				<div class="rounded" style="background: url(../Imagenes/perfil.png); margin-bottom: 5px" >
					<div class="text-center" style="margin-top: 5px">
						<img src="../Imagenes/log.jpg" class="rounded-circle" width="250" height="250">
					</div>
				</div>

				<!-- <img src="../Imagenes/full.jpg" class="img-fluid rounded" alt="Responsive image" style="margin-bottom: 10px"> -->

				<!-- Card -->
				<div class="card" style="margin-bottom: 10px">

					<div class="card-header" style="background-color: #000046">
						
					</div>

					<div class="card-body ">
						<div class="container text-center">

							<div class="row">
								<!-- Primera Columna -->
								<div class="col-md-4">
									<hr>
									<h5><strong>Información Basica <i class="far fa-lightbulb"></i></strong></h5>
										<hr>
									<div class="col">
										<label id="idP"><strong>Identificador :</strong> <span class="badge badge-secondary">1</span></label>
									</div>
									<div class="col">
										<label id="idP"><strong>Nombre :</strong> <span class="badge badge-secondary">Juan Francisco</span></label>
									</div>
									<div class="col">
										<label id="idP"><strong>Apellido :</strong> <span class="badge badge-secondary">Tavarez Diaz</span></label>
									</div>
									<div class="col">
										<label id="idP"><strong>Genero :</strong> <span class="badge badge-secondary">Masculino</span></label>
									</div>

								</div>
								<!-- Primera Columna -->

								<!-- Segunda Columna -->
								<div class="col-md-4">
									<hr>
									<h5><strong>Información General <i class="far fa-lightbulb"></i></strong></h5>
									<hr>
									<div class="col">
										<label id="idP"><strong>Departamento :</strong> <span class="badge badge-secondary">Tecnologia</span></label>
									</div>
									<div class="col">
										<label id="idP"><strong>Correo :</strong> <span class="badge badge-secondary">tavarezju@fondesa.org</span></label>
									</div>
									<div class="col">
										<label id="idP"><strong>Telefono :</strong> <span class="badge badge-secondary">849-402-5485</span></label>
									</div>
									<div class="col text-justify-center">
										<label id="idP"><strong>Nombre Usuario :</strong> <span class="badge badge-secondary">tavarezju</span></label>
									</div>

								</div>
								<!-- Segunda Columna -->

								<!-- Tercera Columna -->
								<div class="col-md-4">
									<hr>
									<h5><strong>Otras Informaciones <i class="far fa-lightbulb"></i></strong></h5>
									<hr>
									<div class="col">
										<label id="idP"><strong>Puesto :</strong> <span class="badge badge-secondary">Asistente TI</span></label>
									</div>
									<div class="col">
										<label id="idP"><strong>Fecha Nacimiento :</strong> <span class="badge badge-secondary">16-03-1992</span></label>
									</div>
									<div class="col">
										<label id="idP"><strong>Estado :</strong> <span class="badge badge-secondary">Activo</span></label>
									</div>
									<div class="col text-justify-center">
										<label id="idP"><strong>Tipo Usuario :</strong> <span class="badge badge-secondary">Administrador</span></label>
									</div>

								</div>
								<!-- Tercera Columna -->

							</div>

						</div>
					</div>

					<div class="card-footer text-muted" style="background-color: #000046">
					</div>

				</div>
				<!-- Card -->

				<!-- Prueba -->
			</div>
		</div>
	</div>
	<!-- Pie -->
	<?php require_once "pie.php" ?>
	<!-- Pie -->
</body>
</html>








