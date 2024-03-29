<!DOCTYPE html>
<html>
<head>
	<title>Galeria</title>
	<?php require_once "dependencias.php"; ?>
</head>
<body>
	<?php require_once "menu.php" ?>
	<br><br><br><br>
	<div class="container">
		<div class="row">
			<!-- Prueba -->
			<div class="col-md-12 rounded alert-secondary " style="background-color: #ECF0F1; margin-bottom: 50px" >
				<h1 class="text-center">Galeria <i class="fas fa-palette"></i></h1>
				<!-- Cabecera -->
				<div class="container" > 
					<div class="col-md-12 mx-auto" style="margin-bottom: 4px">
						<div class="text-center">
							<strong><i class="fas fa-search"></i></strong>
							<label class="text-center">Búsqueda<input type="text" id="buscarVT" name="buscarVT" class="form-control form-control-sm"></label>


							<label><button class="buscar btn btn-secondary btn-sm "><i class="fas fa-search"></i> Buscar</button></label>
						</div>

					</div>
				</div>
				<!-- Cabecera -->
				<hr>
				<div class="col-md-12" style="margin-bottom: 6px">
					<div class="text-center">
						<button class="btn btn-success btn-sm text-right b" data-toggle="modal" data-target="#AgregaAlbum"><i class="fas fa-plus"></i> Album</button>
						<button class="btn btn-success btn-sm text-right b" data-toggle="modal" data-target="#AgregaFoto"><i class="fas fa-plus"></i> Foto</button>
					</div>
				</div>

				<!-- btn Mas -->
				<div class="col-md-12" style="margin-bottom: 4px">
					<div class="text-center ">
						
						<figure class="figure">
							<a href="#AgregaVerAlbum" data-toggle="modal">
							<img src="../Imagenes/Direccion.jpg" class=" Album figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure." height="300" width="300"></a>
							<figcaption class="figure-caption text-center"><strong><span class="badge badge-pill badge-dark">Dirección</span></strong></figcaption>
						</figure>

						
						
						<figure class="figure">
							<img src="../Imagenes/Contabilidad.jpg" class=" Album figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure." height="300" width="300">
							<figcaption class="figure-caption text-center"><strong><span class="badge badge-pill badge-dark">Contabilidad y Admin.</span></strong></figcaption>
						</figure>
						
						
						<figure class="figure">
							<img src="../Imagenes/Creditos.jpg" class="Album figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure." height="300" width="300">
							<figcaption class="figure-caption text-center"><strong><span class="badge badge-pill badge-dark">Creditos y Cobros</span></strong></figcaption>
						</figure>

						
						<figure class="figure">
							<img src="../Imagenes/Tecnologia.jpg" class="Album figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure." height="300" width="300">
							<figcaption class="figure-caption text-center"><strong><span class="badge badge-pill badge-dark">Tecnología</span></strong></figcaption>
						</figure>


						<figure class="figure">
							<img src="../Imagenes/Capacitacion.jpg" class="Album figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure." height="300" width="300">
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
	<?php include "Modal/modalGaleria.php" ?>
<!-- Pie -->
<?php require_once "pie.php" ?>
<!-- Pie -->
</body>
</html>