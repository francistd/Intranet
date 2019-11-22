<!--Modal Agregar Album -->
<div class="modal fade" id="AgregaAlbum" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog " role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i> Agregar Album</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="col">
						<div class="col-sm-10 mx-auto">
							<label><strong>Nombre Album:</strong></label>
							<input type="text" id="Inicial" class="form-control form-control-sm" placeholder="Nombre Album">
						</div>

						<div class="col-sm-10 mx-auto">
							<label><strong>Imagen Portada:</strong></label>
							<div class="fileUpload btn btn-secondary btn-sm" >
								<span>Examinar... <i class="fas fa-cloud-upload-alt"></i></span>
								<input type="file" class="upload"id="file-upload-Album" />
							</div>

							<div class="text-center" id="file-preview-zone-Album">

							</div>

						</div>

					</div>
					
				</form>

			</div>
			<div class="modal-footer ">
				<div class="mx-auto">
					<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fas fa-window-close"></i> <strong>Cerrar</strong></button>
					<button type="button" class="btn btn-warning btn-sm"><i class="far fa-save"></i> <strong>Guardar</strong></button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal Agregar Album -->

<!--Modal Agregar Foto -->
<div class="modal fade" id="AgregaFoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog " role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i> Agregar Foto</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="col">

						<div class="col-sm-10 mx-auto">
						<label><strong>Album:</strong><select id="estado" name="estado" class=" form-control form-control-sm ">
							<option value="">-Seleccione-</option>
							<option>Album1</option>
							<option>Album2</option>
							
						</select></label>
						</div>

						<div class="col-sm-10 mx-auto">
							<label><strong>Nombre Foto:</strong></label>
							<input type="text" id="Inicial" class="form-control form-control-sm" placeholder="Nombre Foto">
						</div>
						<div class="col-sm-10 mx-auto">
							<label><strong>Descripción:</strong></label>
							<input type="text" id="Inicial" class="form-control form-control-sm" placeholder="Descripción">
						</div>

						<div class="col-sm-10 mx-auto">
							<label><strong>Foto:</strong></label>
							<div class="fileUpload btn btn-secondary btn-sm" >
								<span>Examinar... <i class="fas fa-cloud-upload-alt"></i></span>
								<input type="file" class="upload"id="file-upload-Foto" />
							</div>

							<div class="text-center" id="file-preview-zone-Foto">

							</div>

						</div>

					</div>
					
				</form>

			</div>
			<div class="modal-footer ">
				<div class="mx-auto">
					<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fas fa-window-close"></i> <strong>Cerrar</strong></button>
					<button type="button" class="btn btn-warning btn-sm"><i class="far fa-save"></i> <strong>Guardar</strong></button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal Agregar Foto -->

<!--Modal Ver Album -->
<div class="modal fade" id="AgregaVerAlbum" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><i class="far fa-images"></i> Album</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="col-md-12" style="margin-bottom: 4px">
					<div class="text-center ">
						<figure class="figure ">
							<a href="#SubModalVerFoto" data-toggle="modal">
								<img src="../Imagenes/fiesta.jpg" width="250" height="250" class=" shrink figure-img img-fluid rounded">
							</a>
							<figcaption class="figure-caption text-center"><strong><span class="badge badge-pill badge-dark">Foto1</span></strong></figcaption>
						</figure>
						<figure class="figure ">
							<a href="#SubModalVerFoto" data-toggle="modal">
								<img src="../Imagenes/hori.jpg" width="250" height="250" class=" shrink figure-img img-fluid rounded">
							</a>
							<figcaption class="figure-caption text-center"><strong><span class="badge badge-pill badge-dark">Foto2</span></strong></figcaption>
						</figure>
						<figure class="figure">
							<a href="#SubDocumentosDireccion" data-toggle="modal">
								<img src="../Imagenes/IT.jpg" width="250" height="250" class=" shrink figure-img img-fluid rounded">
							</a>
							<figcaption class="figure-caption text-center"><strong><span class="badge badge-pill badge-dark"> Foto3</span></strong></figcaption>
						</figure>
						<figure class="figure">
							<a href="#SubDocumentosDireccion" data-toggle="modal">
								<img src="../Imagenes/Tecnologia.jpg" width="250" height="250" class=" shrink figure-img img-fluid rounded">
							</a>
							<figcaption class="figure-caption text-center"><strong><span class="badge badge-pill badge-dark">Foto4</span></strong></figcaption>
						</figure>
						<figure class="figure">
							<a href="#SubDocumentosDireccion" data-toggle="modal">
								<img src="../Imagenes/perfil.jpg" width="250" height="250" class=" shrink figure-img img-fluid rounded">
							</a>
							<figcaption class="figure-caption text-center"><strong><span class="badge badge-pill badge-dark">Foto5</span></strong></figcaption>
						</figure>

					</div>
				</div>
			</div>
			<div class="modal-footer ">
				<div class="mx-auto">
					<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fas fa-window-close"></i> <strong>Cerrar</strong></button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal Ver Album -->
<?php include "Modal/SubModalVerFoto.php" ?>