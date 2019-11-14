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
				<!-- Cabecera -->
				<hr>

				<!-- btn Mas -->
				<div class="col-md-12" style="margin-bottom: 4px">
					<div class="text-center ">
						<figure class="figure ">
							<a href="#ReporteUsuario" data-toggle="modal"><img src="../Imagenes/Direccion.jpg" class=" shrink figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure." height="160" width="160"></a>
							<figcaption class="figure-caption text-center"><strong><span class="badge badge-pill badge-dark">Reporte de Usuarios</span></strong></figcaption>
						</figure>
						<figure class="figure ">
							<a href="#ReporteOrdenCompra" data-toggle="modal">
							<img src="../Imagenes/Contabilidad.jpg" class=" shrink figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure." height="160" width="160"></a>
							<figcaption class="figure-caption text-center"><strong><span class="badge badge-pill badge-dark">Reporte Orden de Compra.</span></strong></figcaption>
						</figure>
						<figure class="figure">
							<a href="#ReportePermisoUsuario" data-toggle="modal">
							<img src="../Imagenes/Creditos.jpg" class="shrink figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure." height="160" width="160"></a>
							<figcaption class="figure-caption text-center"><strong><span class="badge badge-pill badge-dark">Reporte Permisos usuario</span></strong></figcaption>
						</figure>
						<figure class="figure">
							<a href="#ReporteEmpleado" data-toggle="modal">
							<img src="../Imagenes/Tecnologia.jpg" class="shrink figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure." height="160" width="160"></a>
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
	<?php include "Modal/modalReportes.php" ?>
	<!-- Pie -->
<?php require_once "pie.php" ?>
<!-- Pie -->

</body>
</html>