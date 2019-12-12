<!--Modal Agregar Usuario -->
<div class="modal fade" id="AgregaUsuario"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog " role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i> Agregar Usuario</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form id="frmAgregaUsu">
					<div class="col">
						<div class="col-sm-10 mx-auto">
							<label><strong>Nombre:</strong></label>
							<select style="width:335px" id="select_usu_nom"  name="select_usu_nom" >
							
							</select>
						</div>

						<div class="col-sm-10 mx-auto">
							<label><strong>Departamento:</strong></label>
							<select style="width:335px" id="dep_crea_usu"  name="dep_crea_usu" >
							
							</select>
						</div>

						<div class="col-sm-10 mx-auto">
							<label><strong>Nombre Usuario:</strong></label> 
							<!-- <span id="validar"></span> --> 
							<span id="existe" class="badge badge-danger">[No Disponible] <i class='fas fa-times-circle'></i></span>
							<span id="noexiste" class="badge badge-warning">[Disponible] <i class='fas fa-check-circle'></i></span>
							<input type="text"  id="nom_usu_agre" name="nom_usu_agre" class="form-control form-control-sm" placeholder="Nombre Usuario">
						</div>

						<div class="col-sm-10 mx-auto">
							<label><strong>Contraseña:</strong></label>
							<input type="password" id="contraseña_agre" name="contraseña_agre" class="form-control form-control-sm" placeholder="Contraseña">
						</div>

						<div class="col-sm-10 mx-auto">
							<label><strong>Confirmar Contraseña:</strong></label>
							<input type="password" id="confirmarContraseña" name="confirmarContraseña" class="form-control form-control-sm" placeholder="Confirmar Contraseña">
						</div>
						
						<div class="col-sm-10 mx-auto">
							<label><strong>Tipo Usuario:</strong></label>
							<select class="form-control form-control-sm" id="select_tipo_usu" name="select_tipo_usu">
								<option selected>-Seleccione-</option>
								<option>Administrador</option>
								<option>Regular</option>
							</select>
						</div>

					</div>
					
				</form>

			</div>
			<div class="modal-footer ">
				<div class="mx-auto">
					<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fas fa-window-close"></i> <strong>Cerrar</strong></button>
					<button type="button" id="btn_crea_usu" name="btn_crea_usu" class="btn btn-warning btn-sm"><i class="far fa-save"></i> <strong>Guardar</strong></button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal Agregar Usuario -->


<!-- Modal Editar Usuario -->
<div class="modal fade" id="EditarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-pencil-alt"></i> Editar Usuario</h5>
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
									<select class="form-control form-control-sm" >
										<option selected>-Seleccione-</option>
										<option>Dirección</option>
										<option>Contabilidad y Adm</option>
										<option>Creditos y Cobros</option>
										<option>Tecnología</option>
										<option>Capacitación</option>
									</select>
								</div>
								<div class="col-sm-10 mx-auto">
									<label><strong>Nombre Usuario:</strong></label>
									<input type="text" disabled class="form-control form-control-sm" placeholder="Nombre Usuario">
								</div>
								<div class="col-sm-10 mx-auto">
									<label><strong>Tipo Usuario:</strong></label>
									<select class="form-control form-control-sm" >
										<option selected>-Seleccione-</option>
										<option>Administrador</option>
										<option>Regular</option>
									</select>
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
									<label><strong>Usuario creador:</strong></label>
									<input type="text" disabled class="form-control form-control-sm" placeholder="Usuario creador">
								</div>
								<div class="col-sm-10 mx-auto">
									<label><strong>Usuario Modificador:</strong></label>
									<input type="text" disabled class="form-control form-control-sm" placeholder="Usuario Modificador">
								</div>
								<div class="col-sm-10 mx-auto">
									<label><strong>Hora Modificación:</strong></label>
									<input type="text" disabled class="form-control form-control-sm" placeholder="Hora Modificación">
								</div>
								<div class="col-sm-10 mx-auto">
									<label><strong>Estado:</strong></label>
									<select class="form-control form-control-sm" >
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
	<!-- Modal Editar Usuario -->