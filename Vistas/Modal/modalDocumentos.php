<!--Modal Agregar Documento -->
<div class="modal fade" id="AgregaDocumento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog " role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i> Agregar Documento</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="col">
						<div class="col-sm-10 mx-auto">
							<label><strong>Nombre Documento:</strong></label>
							<input type="text" id="Inicial" class="form-control form-control-sm" placeholder="Nombre Documento">
						</div>

						<div class="col-sm-10 mx-auto">
							<label><strong>Ruta Documento:</strong></label>
							<div class="fileUpload btn btn-secondary btn-sm" >
								<span>Examinar... <i class="fas fa-cloud-upload-alt"></i></span>
								<input type="file" class="upload"id="file-upload-Doc" />
							</div>

							<div class="text-center" id="file-preview-zone-Doc">

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
<!-- Modal Agregar Agregar Documento -->

<!-- Modal Documentos Dirección -->
<div class="modal fade" id="DocumentosDireccion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-sitemap"></i> Documentos Dirección</h5>
				<!-- Prueba -->
				<div class="text-center mx-auto">
					<strong><i class="fas fa-search"></i></strong>
					<label class="text-center">Búsqueda<input type="text" id="buscarVT" name="buscarVT" class="form-control form-control-sm"></label>
				</div>
				<!-- Prueba -->
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="col-md-12" style="margin-bottom: 4px">
					<div class="text-center ">
						<figure class="figure ">
							<a href="#SubDocumentosDireccion" data-toggle="modal">
								<img src="../Imagenes/pf.png" width="90" height="90" class=" shrink figure-img img-fluid rounded">
							</a>
							<figcaption class="figure-caption text-center"><strong><span class="badge badge-pill badge-dark">Manual Control Usuario</span></strong></figcaption>
						</figure>
						<figure class="figure ">
							<a href="#SubDocumentosDireccion" data-toggle="modal">
								<img src="../Imagenes/pf.png" width="90" height="90" class=" shrink figure-img img-fluid rounded">
							</a>
							<figcaption class="figure-caption text-center"><strong><span class="badge badge-pill badge-dark">Otro Manual Intitucional</span></strong></figcaption>
						</figure>
						<figure class="figure">
							<a href="#SubDocumentosDireccion" data-toggle="modal">
								<img src="../Imagenes/pf.png" width="90" height="90" class=" shrink figure-img img-fluid rounded">
							</a>
							<figcaption class="figure-caption text-center"><strong><span class="badge badge-pill badge-dark"> Manual de Creditos y Cobros</span></strong></figcaption>
						</figure>
						<figure class="figure">
							<a href="#SubDocumentosDireccion" data-toggle="modal">
								<img src="../Imagenes/pf.png" width="90" height="90" class=" shrink figure-img img-fluid rounded">
							</a>
							<figcaption class="figure-caption text-center"><strong><span class="badge badge-pill badge-dark">Manual de Tecnología</span></strong></figcaption>
						</figure>
						<figure class="figure">
							<a href="#SubDocumentosDireccion" data-toggle="modal">
								<img src="../Imagenes/pf.png" width="90" height="90" class=" shrink figure-img img-fluid rounded">
							</a>
							<figcaption class="figure-caption text-center"><strong><span class="badge badge-pill badge-dark">Manual de Capacitación</span></strong></figcaption>
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
<!-- Modal Documentos Dirección -->



<?php include "Modal/SubModalDireccion.php" ?>