<!-- Modal Administrar Solicitud Compra -->
<div class="modal fade" id="AdministrarOrdenCompra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-pencil-alt"></i> Administrar Ordenes</h5>
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
									<input type="text" readonly class="form-control form-control-sm" placeholder="Identificador">
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
									<input type="number" id="UnidadAdm" min="0" class="form-control form-control-sm" placeholder="Unidad">
								</div>
								<div class="col-sm-10 mx-auto">
									<label><strong>Precio Unidad:</strong></label>
									<input type="number" id="PrecioAdm" min="0" class="form-control form-control-sm" placeholder="Unidades">
								</div>
								<div class="col-sm-10 mx-auto">
									<label><strong>Total:</strong></label>
									<input type="text" readonly id="TotalAdm"  class="form-control form-control-sm" placeholder="Total">
								</div>
								
							</div>

							<div class="col">
								<div class="col-sm-10 mx-auto">
									<label><strong>Usuario Creador:</strong></label>
									<input type="text" disabled class="form-control form-control-sm" placeholder="Usuario Creador">
								</div>
								<div class="col-sm-10 mx-auto">
									<label><strong>Fecha Creación:</strong></label>
									<input type="text" disabled class="form-control form-control-sm" placeholder="Fecha Creación">
								</div>
								<div class="col-sm-10 mx-auto">
									<label><strong>Hora Creación:</strong></label>
									<input type="text" disabled class="form-control form-control-sm" placeholder="Hora Creación">
								</div>
								<div class="col-sm-10 mx-auto">
									<label><strong>Autorizado por:</strong></label>
									<input type="text" disabled class="form-control form-control-sm" placeholder="Autorizado por">
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
									<label><strong>Estado:</strong></label>
									<input type="text" disabled class="form-control form-control-sm" placeholder="Estado">
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