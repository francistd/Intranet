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
				<div class="col-md-12" style="margin-bottom: 6px">
					<div class="text-center">
						<button class=" agregaDep btn btn-success text-right" data-toggle="modal" data-target="#AgregaDepartamento"><i class="fas fa-plus"></i> </button>
					</div>
				</div>
				<!-- PruebaF -->
				<div class="col-md-12" style="margin-bottom: 4px">
					<div class="text-center ">
						<figure class="figure ">
							<img src="../Imagenes/direccion.png" class=" shrink figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure." height="160" width="160">
							<figcaption class="figure-caption text-center"><h5><strong><span class="badge badge-pill badge-dark">Dirección</span></strong></h5>
								<!-- Prueba -->
								<button class="Edita btn btn-secondary btn-sm" style="margin-bottom: 4px" data-toggle="modal" data-target="#EditarDepartamento"><i class="fas fa-external-link-alt"></i></button>
									<button class="Borra btn btn-secondary btn-sm" style="margin-bottom: 4px"><i class="far fa-trash-alt"></i></button>
								<!-- Prueba -->
							</figcaption>
						</figure>
						<figure class="figure ">
							<img src="../Imagenes/contabilidad.png" class=" shrink figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure." height="160" width="160">
							<figcaption class="figure-caption text-center"><h5><strong><span class="badge badge-pill badge-dark">Contabilidad y Admin.</span></strong></h5>
								<!-- Prueba -->
								<button class="Edita btn btn-secondary btn-sm" style="margin-bottom: 4px"><i class="fas fa-external-link-alt"></i></button>
									<button class="Borra btn btn-secondary btn-sm" style="margin-bottom: 4px"><i class="far fa-trash-alt"></i></button>
								<!-- Prueba -->
							</figcaption>
						</figure>
						<figure class="figure">
							<img src="../Imagenes/cobros.png" class="shrink figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure." height="160" width="160">
							<figcaption class="figure-caption text-center"><h5><strong><span class="badge badge-pill badge-dark">Creditos y Cobros</span></strong></h5>
								<!-- Prueba -->
								<button class="Edita btn btn-secondary btn-sm" style="margin-bottom: 4px"><i class="fas fa-external-link-alt"></i></button>
									<button class="Borra btn btn-secondary btn-sm" style="margin-bottom: 4px"><i class="far fa-trash-alt"></i></button>
								<!-- Prueba -->
							</figcaption>
						</figure>
						<figure class="figure">
							<img src="../Imagenes/tecnologia.png" class="shrink figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure." height="160" width="160">
							<figcaption class="figure-caption text-center"><h5><strong><span class="badge badge-pill badge-dark">Tecnología</span></strong></h5>
								<!-- Prueba -->
								<button class="Edita btn btn-secondary btn-sm" style="margin-bottom: 4px"><i class="fas fa-external-link-alt"></i></button>
									<button class="Borra btn btn-secondary btn-sm" style="margin-bottom: 4px"><i class="far fa-trash-alt"></i></button>
								<!-- Prueba -->
							</figcaption>
						</figure>
						<figure class="figure">
							<img src="../Imagenes/capacitacion.png" class="shrink figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure." height="160" width="160">
							<figcaption class="figure-caption text-center"><strong><h5><span class="badge badge-pill badge-dark">Capacitación</span></strong></h5>
								<!-- Prueba -->
								<button class="Edita btn btn-secondary btn-sm" style="margin-bottom: 4px"><i class="fas fa-external-link-alt"></i></button>
									<button class="Borra btn btn-secondary btn-sm" style="margin-bottom: 4px"><i class="far fa-trash-alt"></i></button>
								<!-- Prueba -->
							</figcaption>
						</figure>

					</div>
					<hr>
				</div>
				<!-- PruebaF -->
			</div>
		</div>
	</div>
<?php include "Modal/modalDepartamento.php"; ?>
<!-- Pie -->
<?php require_once "pie.php" ?>
<!-- Pie -->
</body>
</html>