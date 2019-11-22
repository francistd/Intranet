<!-- Modal Agregar Departamento -->
<div class="modal fade" id="AgregaDepartamento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i> Agregar Departamento</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<form>
					<!-- Aqui -->
					<div class="col">
						<div class="col-sm-10 mx-auto">
							<label><strong>Foto Departamento:</strong></label>
							<div class="fileUpload btn btn-secondary btn-sm" >
								<span>Examinar... <i class="fas fa-cloud-upload-alt"></i></span>
								<input type="file" class="upload"id="file-upload-Depart" />
							</div>

							<div class="text-center" id="file-preview-zone-Depart">

							</div>
						</div>
						<div class="col-sm-10 mx-auto">
							<label><strong>Nombre Departamento</strong></label>
							<input type="text" id="idu" placeholder="Departamento" name="idu" class="form-control form-control-sm">
						</div>
						
					</div>
					<!-- Aqui -->

				</form>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fas fa-window-close"></i> <strong>Cerrar</strong></button>
				<button type="button" class="btn btn-warning btn-sm"><i class="far fa-save"></i> <strong>Guardar</strong></button>
			</div>
		</div>
	</div>
</div>
<!-- Modal Agregar Departamento -->

<!-- Modal Editar Departamento -->
<div class="modal fade" id="EditarDepartamento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-pencil-alt"></i> Editar Departamento</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<form>
					<div class="col">
						
							<div class="col-sm-10 mx-auto">
							<label><strong>Foto Departamento:</strong></label>
							<div class="fileUpload btn btn-secondary btn-sm" >
								<span>Examinar... <i class="fas fa-cloud-upload-alt"></i></span>
								<input type="file" class="upload"id="file-upload-editar-Depart" />
							</div>

							<div class="text-center" id="file-preview-zone-editar-Depart">

							</div>
						</div>

							<div class="col-sm-10 mx-auto">
								<label><strong>Nombre Departamento</strong></label>
								<input type="text" id="idu" placeholder="Departamento" name="idu" class="form-control form-control-sm">
							</div>

							<div class="col-sm-10 mx-auto">
								<label for="message-text" class="col-form-label"><strong>Estado</strong></label>
								<select class="form-control form-control-sm" id="exampleFormControlSelect1">
									<option selected>-Seleccione-</option>
									<option>Activo</option>
									<option>Inactivo</option>
								</select>
							</div>
						</div>

				</form>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fas fa-window-close"></i> <strong>Cerrar</strong></button>
				<button type="button" class="btn btn-warning btn-sm"><i class="far fa-save"></i> <strong>Guardar</strong></button>
			</div>
		</div>
	</div>
</div>
	<!-- Modal Editar Departamento