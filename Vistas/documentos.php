<!DOCTYPE html>
<html>
<head>
	<title>Documentos</title>
	<?php require_once "dependencias.php"; ?>
</head>
<body>
	<?php require_once "menu.php" ?>
	<br><br><br><br>
	<div class="container">
		<div class="row">
			<!-- Prueba -->
			<div class="col-md-12 rounded alert-secondary " style="background-color: #ECF0F1; margin-bottom: 50px" >
				<h1 class="text-center">Documentos <i class="fas fa-archive"></i></h1>
				<!-- Cabecera -->
				<div class="container" > 
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

							<label><button class="buscar btn btn-secondary btn-sm "><i class="fas fa-search"></i> Buscar</button></label>
						</div>

					</div>
				</div>
				<!-- Cabecera -->
				<hr>
				<div class="col-md-12" style="margin-bottom: 4px">
					<div class="text-center">
						<button class="btn btn-success  text-right b"><i class="fas fa-plus"></i> </button>
					</div>
				</div>

				<!-- btn Mas -->
				<div class="col-md-12" style="margin-bottom: 4px">
					<div class="text-center ">
						<figure class="figure ">
							<img src="../Imagenes/Direccion.jpg" class=" shrink figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure." height="160" width="160">
							<figcaption class="figure-caption text-center"><strong><span class="badge badge-pill badge-dark">Dirección</span></strong></figcaption>
						</figure>
						<figure class="figure ">
							<img src="../Imagenes/Contabilidad.jpg" class=" shrink figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure." height="160" width="160">
							<figcaption class="figure-caption text-center"><strong><span class="badge badge-pill badge-dark">Contabilidad y Admin.</span></strong></figcaption>
						</figure>
						<figure class="figure">
							<img src="../Imagenes/Creditos.jpg" class="shrink figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure." height="160" width="160">
							<figcaption class="figure-caption text-center"><strong><span class="badge badge-pill badge-dark">Creditos y Cobros</span></strong></figcaption>
						</figure>
						<figure class="figure">
							<img src="../Imagenes/Tecnologia.jpg" class="shrink figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure." height="160" width="160">
							<figcaption class="figure-caption text-center"><strong><span class="badge badge-pill badge-dark">Tecnología</span></strong></figcaption>
						</figure>
						<figure class="figure">
							<img src="../Imagenes/Capacitacion.jpg" class="shrink figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure." height="160" width="160">
							<figcaption class="figure-caption text-center"><strong><span class="badge badge-pill badge-dark">Capacitación</span></strong></figcaption>
						</figure>

					</div>
				</div>
				<!-- btn Mas -->
				
				<hr>
				<!-- Pruebaa -->
				<!-- Pruebaa -->
			</div>
			
		</div>
	</div>
	
<!-- Pie -->
<?php require_once "pie.php" ?>
<!-- Pie -->
</body>
</html>