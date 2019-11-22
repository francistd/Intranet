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
					<div class="col">
						<div class="col-sm-10 mx-auto">
							<label><strong>Foto Noticia:</strong></label>
							<div class="fileUpload btn btn-secondary btn-sm" >
								<span>Examinar... <i class="fas fa-cloud-upload-alt"></i></span>
								<input type="file" class="upload"id="file-upload-Noticia" />
							</div>

							<div class="text-center" id="file-preview-zone-Noticia">

							</div>

						</div>

						<div class="col-sm-10 mx-auto">
							<label><strong>Título</strong></label>
							<input type="text" id="idu" placeholder="Título" name="idu" class="form-control form-control-sm">
						</div>

						<div class="col-sm-10 mx-auto">
							<label for="message-text" class="col-form-label"><strong>Texto</strong></label>
							<textarea class="form-control form-control-sm" placeholder="Texto" id="message-text"></textarea>
						</div>
					</div>

				</form>

			</div>
			<div class="modal-footer">
				<div class="mx-auto">
					<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fas fa-window-close"></i> <strong>Cerrar</strong></button>
					<button type="button" class="btn btn-warning btn-sm"><i class="far fa-save"></i> <strong>Guardar</strong></button>
				</div>
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
					<div class="col">
						<div class="col-sm-10 mx-auto">
							<label><strong>Foto Noticia:</strong></label>
							<div class="fileUpload btn btn-secondary btn-sm" >
								<span>Examinar... <i class="fas fa-cloud-upload-alt"></i></span>
								<input type="file" class="upload"id="file-upload-Editar-Noticia" />
							</div>

							<div class="text-center" id="file-preview-zone-Editar-Noticia">

							</div>

						</div>

						<div class="col-sm-10 mx-auto">
							<label><strong>Título</strong></label>
							<input type="text" id="idu" placeholder="Título" name="idu" class="form-control form-control-sm">
						</div>

						<div class="col-sm-10 mx-auto">
							<label for="message-text" class="col-form-label"><strong>Texto</strong></label>
							<textarea class="form-control form-control-sm" placeholder="Texto" id="message-text"></textarea>
						</div>
					</div>

				</form>

			</div>
			<div class="modal-footer">
				<div class="mx-auto">
					<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fas fa-window-close"></i> <strong>Cerrar</strong></button>
					<button type="button" class="btn btn-warning btn-sm"><i class="far fa-save"></i> <strong>Guardar</strong></button>
				</div>
			</div>
		</div>
	</div>
</div>
	<!-- Modal Editar Noticia -->