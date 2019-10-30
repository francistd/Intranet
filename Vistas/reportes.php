<!DOCTYPE html>
<html>
<head>
	<title>Reportes</title>
	<?php require_once "dependencias.php"; ?>
</head>
<body>
	<?php require_once "menu.php" ?>
	<br><br><br><br>
	<div class="container">
		<div class="row">
			<!-- Prueba -->
			<div class="col-md-12 rounded alert-secondary " style="background-color: #ECF0F1; margin-bottom: 50px" >
				<h1 class="text-center">Reportes <i class="fas fa-chart-line"></i></h1>
				<!-- Cabecera -->
				<div class="container" > 
					<div class="col-md-12 mx-auto" style="margin-bottom: 4px">
						<div class="text-center">
							<strong><i class="fas fa-search"></i></strong>
							<label class="text-center">Búsqueda<input type="text" id="buscarVT" name="buscarVT" class="form-control form-control-sm"></label>

							<strong><i class="far fa-calendar-alt"></i> </strong>
									<label> Desde<input type = "date"  id="fecha_inicialVT" name="fecha_inicialVT" class="form-control form-control-sm"></label>

									<strong><i class="far fa-calendar-alt"></i> </strong>
									<label> Hasta<input type = "date"  id="fecha_finalVT" name="fecha_finalVT"  class="form-control form-control-sm"></label>

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
							<figcaption class="figure-caption text-center"><strong><span class="badge badge-pill badge-dark">Reporte de Usuarios</span></strong></figcaption>
						</figure>
						<figure class="figure ">
							<img src="../Imagenes/Contabilidad.jpg" class=" shrink figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure." height="160" width="160">
							<figcaption class="figure-caption text-center"><strong><span class="badge badge-pill badge-dark">Reporte Orden de Compra.</span></strong></figcaption>
						</figure>
						<figure class="figure">
							<img src="../Imagenes/Creditos.jpg" class="shrink figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure." height="160" width="160">
							<figcaption class="figure-caption text-center"><strong><span class="badge badge-pill badge-dark">Reporte Permisos usuario</span></strong></figcaption>
						</figure>
						<figure class="figure">
							<img src="../Imagenes/Tecnologia.jpg" class="shrink figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure." height="160" width="160">
							<figcaption class="figure-caption text-center"><strong><span class="badge badge-pill badge-dark">Reporte Empleados</span></strong></figcaption>
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