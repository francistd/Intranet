<!--Modal Perfil-->
<div class="modal fade" id="AgregaFotoPerfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog " role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-pencil-alt"></i> Cambiar Foto Perfil</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form> 
					<div class="col">
						<div class="col-sm-10 mx-auto">
							<label><strong>Foto Perfil:</strong></label>
							<div class="fileUpload btn btn-secondary btn-sm" >
								<span>Examinar... <i class="fas fa-cloud-upload-alt"></i></span>
								<input type="file" class="upload"id="file-upload-FotoPerfil" />
							</div>

							<div class="text-center" id="file-preview-zone-FotoPerfil">

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
<!-- Modal Perfil -->