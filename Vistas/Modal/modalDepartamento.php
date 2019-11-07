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
					<div class="form-group">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text" id="inputGroupFileAddon01"><i class="fas fa-camera-retro"></i></span>
							</div>
							<div class="custom-file">
								<input type="file" id="file-upload-Dep" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
								<label class="custom-file-label" for="inputGroupFile01">Seleccione Archivo</label>
							</div>
						</div>
					</div>
					<div class="text-center" id="file-preview-zone-Dep">

					</div>

					<div class="form-group">
						<label><strong>Nombre Departamento</strong></label>
						<input type="text" id="idu" placeholder="Departamento" name="idu" class="form-control form-control-sm">
					</div>

					<div class="form-group">
						<label for="message-text" class="col-form-label"><strong>Estado</strong></label>
						<select class="form-control form-control-sm" id="exampleFormControlSelect1">
							<option selected>-Seleccione-</option>
							<option>Activo</option>
							<option>Inactivo</option>
						</select>
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
	<!-- Modal Agregar Departamento -->

	<!-- Modal Editar Departamento -->
<div class="modal fade" id="EditarDepartamento" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i> Editar Departamento</h5>
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
								<input type="file" id="file-upload-Dep-Edit" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
								<label class="custom-file-label" for="inputGroupFile01">Seleccione Archivo</label>
							</div>
						</div>
					</div>
					<div class="text-center" id="file-preview-zone-Dep-Edit">

					</div>

					<div class="form-group">
						<label><strong>Nombre Departamento</strong></label>
						<input type="text" id="idu" placeholder="Departamento" name="idu" class="form-control form-control-sm">
					</div>

					<div class="form-group">
						<label for="message-text" class="col-form-label"><strong>Estado</strong></label>
						<select class="form-control form-control-sm" id="exampleFormControlSelect1">
							<option selected>-Seleccione-</option>
							<option>Activo</option>
							<option>Inactivo</option>
						</select>
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
	<!-- Modal Editar Departamento -->