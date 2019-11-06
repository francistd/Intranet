<!DOCTYPE html>
<html>
<head>
	<title>Noticias</title>
	<?php require_once "dependencias.php"; ?>
</head>
<body>
	<?php require_once "menu.php" ?>
	<br><br><br><br>
	<div class="container">
		<div class="row">
			<!-- Prueba -->
			<div class="col-md-12 rounded alert-secondary " style="background-color: #ECF0F1; margin-bottom: 50px" >
				<h1 class="text-center">Noticias <i class="fas fa-rss-square"></i></h1>
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

							<label><button class=" buscarNoti btn btn-secondary btn-sm "><i class="fas fa-search"></i> Buscar</button></label>
						</div>
					</div>
				</div>
				<!-- Cabecera -->
				<hr>
				<div class="col-md-12" style="margin-bottom: 4px">
					<div class="text-center">
						<button class="agregaNoti btn btn-success text-right" data-toggle="modal" data-target="#AgregaNoticia"><i class="fas fa-plus"></i></button>
					</div>
				</div>
				<div class="col-md-8 mx-auto" style="margin-bottom: 50px">
					<div class="card">
						<div class="card-header">
							<span class="badge badge-pill badge-dark"><i class="fas fa-newspaper"></i> <strong>Generada el</strong> 23-10-2019 | 8:59 AM</span>
							<div class="float-right">
								<button class="editaNoti btn btn-success btn-sm" data-toggle="modal" data-target="#EditarNoticia" style="margin-bottom: 4px"><i class="fas fa-edit"></i></button>
								<button class="borrarNoti btn btn-danger btn-sm" style="margin-bottom: 4px"><i class="fas fa-trash-alt"></i></button>
							</div>
							
						</div>
						<img src="../Imagenes/UNPHU-FONDESA.jpg" class="img-thumbnail card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title"><i class="fas fa-newspaper"></i> <strong>FONDESA y UNPHU</strong></h5>
							<p class="card-text" style="color: black">Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
				</div>
				<hr>
				<!-- Pruebaa -->
				<div class="col-md-8 mx-auto" style="margin-bottom: 50px">
					<div class="card">
						<div class="card-header">
							<span class="badge badge-pill badge-dark"><i class="fas fa-newspaper"></i> <strong>Generada el</strong> 23-10-2019 | 9:10 AM</span>
							<div class="float-right">
								<button class="editaNoti btn btn-success btn-sm" style="margin-bottom: 4px"><i class="fas fa-edit"></i></button>
								<button class="borrarNoti btn btn-danger btn-sm" style="margin-bottom: 4px"><i class="fas fa-trash-alt"></i></button>
							</div>
						</div>
						<img src="../Imagenes/fondesa.jpg" class="img-thumbnail card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title"><i class="fas fa-newspaper"></i> <strong>Fondesa tiene $812.5 millones para Microempresas</strong></h5>
							<p class="card-text" style="color: black">Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
				</div>
				<!-- Pruebaa -->
			</div>
			
		</div>
	</div>
	<!-- Modal Agregar Noticia -->
	<div class="modal fade" id="AgregaNoticia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i> Agregar Noticia</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<form>
						<div class="form-group">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroupFileAddon01"><i class="fas fa-camera-retro"></i></span>
								</div>
								<div class="custom-file">
									<input type="file" id="file-upload" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
									<label class="custom-file-label" for="inputGroupFile01">Seleccione Archivo</label>
								</div>
							</div>
						</div>
						<div class="text-center" id="file-preview-zone">

						</div>

						<div class="form-group">
							<label><strong>Título</strong></label>
							<input type="text" id="idu" placeholder="Título" name="idu" class="form-control form-control-sm">
						</div>

						<div class="form-group">
							<label for="message-text" class="col-form-label"><strong>Texto</strong></label>
							<textarea class="form-control form-control-sm" placeholder="Texto" id="message-text"></textarea>
						</div>

					</form>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fas fa-window-close"></i> <strong>Cerrar</strong></button>
					<button type="button" class="btn btn-primary btn-sm"><i class="far fa-save"></i> <strong>Guardar</strong></button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal Agregar Noticia -->

	<!-- Modal Editar Noticia -->
	<div class="modal fade" id="EditarNoticia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-pencil-alt"></i> Editar Noticia</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<form>
						<div class="form-group">
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text" id="inputGroupFileAddon01"><i class="fas fa-camera-retro"></i></span>
								</div>
								<div class="custom-file">
									<input type="file" id="file-upload" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
									<label class="custom-file-label" for="inputGroupFile01">Seleccione Archivo</label>
								</div>
							</div>
						</div>
						<div class="text-center" id="file-preview-zone">

						</div>

						<div class="form-group">
							<label><strong>Título</strong></label>
							<input type="text" id="idu" placeholder="Título" name="idu" class="form-control form-control-sm">
						</div>

						<div class="form-group">
							<label for="message-text" class="col-form-label"><strong>Texto</strong></label>
							<textarea class="form-control form-control-sm" placeholder="Texto" id="message-text"></textarea>
						</div>

					</form>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fas fa-window-close"></i> <strong>Cerrar</strong></button>
					<button type="button" class="btn btn-primary btn-sm"><i class="far fa-save"></i> <strong>Guardar</strong></button>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal Editar Noticia -->

	<!-- Pie -->
	<?php require_once "pie.php" ?>
	<!-- Pie -->
</body>
</html>