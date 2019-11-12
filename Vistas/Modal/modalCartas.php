<!--Modal Agregar Carta -->
<div class="modal fade" id="AgregaCarta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog " role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i> Agregar Carta</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="col">
						<div class="col-sm-10 mx-auto">
							<label><strong>Nombre:</strong></label>
							<input type="text" class="form-control form-control-sm" placeholder="Nombre">
						</div>

						<div class="col-sm-10 mx-auto">
							<label><strong>Descripción:</strong></label>
							<textarea class="form-control form-control-sm"></textarea>
						</div>

						<div class="col-sm-10 mx-auto">
							<label><strong>Tipo Carta:</strong></label>
							<select class="form-control form-control-sm" id="exampleFormControlSelect1">
								<option selected>-Seleccione-</option>
								<option>Carta Trabajo</option>
								<option>Carta Banco</option>
							</select>
						</div>
						<div class="col-sm-10 mx-auto">
							<label><strong>Para Fecha:</strong></label>
							<input type="date" class="form-control form-control-sm" placeholder="Fecha Para">
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
<!-- Modal Agregar Carta -->

<!-- Modal Editar Carta -->
<div class="modal fade" id="EditarCarta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-pencil-alt"></i> Editar Carta</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<form>

						<div class="row">
							<div class="col">
								<div class="col-sm-10 mx-auto">
									<label><strong>Nombre:</strong></label>
									<input type="text" class="form-control form-control-sm" placeholder="Nombre">
								</div>
								<div class="col-sm-10 mx-auto">
									<label><strong>Departamento:</strong></label>
									<select class="form-control form-control-sm" id="exampleFormControlSelect1">
										<option selected>-Seleccione-</option>
										<option>Dirección</option>
										<option>Contabilidad y Adm</option>
										<option>Creditos y Cobros</option>
										<option>Tecnología</option>
										<option>Capacitación</option>
									</select>
								</div>
								<div class="col-sm-10 mx-auto">
									<label><strong>Descripción:</strong></label>
									<textarea class="form-control form-control-sm"></textarea>
								</div>
								<div class="col-sm-10 mx-auto">
									<label><strong>Tipo Carta:</strong></label>
									<select class="form-control form-control-sm" id="exampleFormControlSelect1">
										<option selected>-Seleccione-</option>
										<option>Carta Trabajo</option>
										<option>Carta Banco</option>
									</select>
								</div>
								<div class="col-sm-10 mx-auto">
									<label><strong>Fecha Para:</strong></label>
									<input type="text" class="form-control form-control-sm" placeholder="Fecha para">
								</div>
								<div class="col-sm-10 mx-auto">
									<label><strong>Fecha Creación:</strong></label>
									<input type="date" disabled class="form-control form-control-sm" placeholder="Fecha Creación">
								</div>
							</div>

							<div class="col">
								<div class="col-sm-10 mx-auto">
									<label><strong>Hora Creación:</strong></label>
									<input type="text" disabled class="form-control form-control-sm" placeholder="Hora">
								</div>
								<div class="col-sm-10 mx-auto">
									<label><strong>Fecha Modificación:</strong></label>
									<input type="text" disabled class="form-control form-control-sm" placeholder="Fecha Modificación">
								</div>
								<div class="col-sm-10 mx-auto">
									<label><strong>Hora Modificación:</strong></label>
									<input type="text" disabled class="form-control form-control-sm" placeholder="Hora Modificación">
								</div>
								<div class="col-sm-10 mx-auto">
									<label><strong>Usuario creador:</strong></label>
									<input type="text" disabled class="form-control form-control-sm" placeholder="Usuario creador">
								</div>
								<div class="col-sm-10 mx-auto">
									<label><strong>Usuario Modificador:</strong></label>
									<input type="text" disabled class="form-control form-control-sm" placeholder="Usuario Modificador">
								</div>
								<div class="col-sm-10 mx-auto">
									<label><strong>Estado:</strong></label>
									<select class="form-control form-control-sm" id="exampleFormControlSelect1">
										<option selected>-Seleccione-</option>
										<option>Activo</option>
										<option>Inactivo</option>
									</select>
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
	<!-- Modal Editar Carta -->

	