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
									<input type="file" id="file-upload-Edit" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
									<label class="custom-file-label" for="inputGroupFile01">Seleccione Archivo</label>
								</div>
							</div>
						</div>
						<div class="text-center" id="file-preview-zone-Edit">

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