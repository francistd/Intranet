<!-- Modal Agregar Solicitud Compra -->
<div class="modal fade" id="AgregarSolicitudCompra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i> Agregar Solicitud de Compra</h5>
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
									<label><strong>Nombre Usuario:</strong></label>
									<input type="text" class="form-control form-control-sm" placeholder="Nombre Usuario">
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
								
							</div>

							<div class="col">
								<div class="col-sm-10 mx-auto">
									<label><strong>Unidad:</strong></label>
									<input type="number" id="Unidad" min="0" class="form-control form-control-sm" placeholder="Unidad">
								</div>
								<div class="col-sm-10 mx-auto">
									<label><strong>Precio Unidad:</strong></label>
									<input type="number" id="Precio" min="0" class="form-control form-control-sm" placeholder="Unidades">
								</div>
								<div class="col-sm-10 mx-auto">
									<label><strong>Total:</strong></label>
									<input type="text" readonly id="Total"  class="form-control form-control-sm" placeholder="Total">
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
	<!-- Modal Agregar Solicitud Compra -->


<!-- Modal Editar Solicitud Compra -->
<div class="modal fade" id="EditarSolicitudCompra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-pencil-alt"></i> Editar Solicitud de Compra</h5>
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
									<label><strong>Identificador#:</strong></label>
									<input type="text" class="form-control form-control-sm" placeholder="Identificador">
								</div>
								<div class="col-sm-10 mx-auto">
									<label><strong>Nombre:</strong></label>
									<input type="text" class="form-control form-control-sm" placeholder="Nombre">
								</div>
								<div class="col-sm-10 mx-auto">
									<label><strong>Nombre Usuario:</strong></label>
									<input type="text" class="form-control form-control-sm" placeholder="Nombre Usuario">
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
									<label><strong>Unidad:</strong></label>
									<input type="number" id="Unidad" min="0" class="form-control form-control-sm" placeholder="Unidad">
								</div>
								<div class="col-sm-10 mx-auto">
									<label><strong>Precio Unidad:</strong></label>
									<input type="number" id="Precio" min="0" class="form-control form-control-sm" placeholder="Unidades">
								</div>
								<div class="col-sm-10 mx-auto">
									<label><strong>Total:</strong></label>
									<input type="text" readonly id="Total"  class="form-control form-control-sm" placeholder="Total">
								</div>
								
							</div>

							<div class="col">
								<div class="col-sm-10 mx-auto">
									<label><strong>Unidad:</strong></label>
									<input type="number" id="Unidad" min="0" class="form-control form-control-sm" placeholder="Unidad">
								</div>
								<div class="col-sm-10 mx-auto">
									<label><strong>Precio Unidad:</strong></label>
									<input type="number" id="Precio" min="0" class="form-control form-control-sm" placeholder="Unidades">
								</div>
								<div class="col-sm-10 mx-auto">
									<label><strong>Total:</strong></label>
									<input type="text" readonly id="Total"  class="form-control form-control-sm" placeholder="Total">
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
	<!-- Modal Editar Solicitud Compra -->