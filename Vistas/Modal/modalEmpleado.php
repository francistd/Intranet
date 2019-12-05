<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- Modal Agregar Empleado -->
<div class="modal fade" id="AgregaEmpleado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i> Agregar Empleado</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form enctype="multipart/form-data" id="frmAgregaEmp" >

					<div class="text-center">
						<label><strong>Foto</strong></label>
						<div class="fileUpload btn btn-secondary btn-sm" >
							<span>Examinar... <i class="fas fa-cloud-upload-alt"></i></span>
							<input type="file" id="file-upload-Emp" name="file-upload-Emp"  class="upload"/>
							
						</div>
					</div>

					<div class="text-center" id="file-preview-zone-Emp">

					</div>

					<div class="row">
						<div class="col">
							<div class="col-sm-10 mx-auto">
								<label><strong>Nombre:</strong></label>
								<input type="text" id="nombre_emp" name="nombre_emp" class="form-control form-control-sm" placeholder="Nombre">
							</div>

							<div class="col-sm-10 mx-auto">
								<label><strong>Apellido:</strong></label>
								<input type="text" id="apellido_emp" name="apellido_emp" class="form-control form-control-sm" placeholder="Apellido">
							</div>

							<div class="col-sm-10 mx-auto">
								<label><strong>Departamento:</strong></label>
								<select class="form-control form-control-sm" id="select_dep_emp" name="select_dep_emp">
									<option selected>-Seleccione-</option>
									<option value="5">Dirección</option>
									<option value="2">Contabilidad y Adm</option>
									<option value="3">Creditos y Cobros</option>
									<option value="1">Tecnología</option>
									<option value="4">Capacitación</option>
								</select>
							</div>

							<div class="col-sm-10 mx-auto">
								<label><strong>Correo Electrónico:</strong></label>
								<input type="text" id="correo_emp" name="correo_emp" class="form-control form-control-sm" placeholder="Correo Electrónico">
							</div>

							<div class="col-sm-10 mx-auto">
								<label><strong>Dirección:</strong></label>
								<input type="text" id="direccion_emp" name="direccion_emp" class="form-control form-control-sm" placeholder="Dirección">
							</div>

						</div>

						<div class="col">

							<div class="col-sm-10 mx-auto">
								<label><strong>Género:</strong></label>
								<select class="form-control form-control-sm" id="select_emp_genero" name="select_emp_genero">
									<option selected>-Seleccione-</option>
									<option>Masculino</option>
									<option>Femenino</option>
								</select>
							</div>

							<div class="col-sm-10 mx-auto">
								<label><strong>Posición:</strong></label>
								<input type="text" id="posicion_emp" name="posicion_emp" class="form-control form-control-sm" placeholder="Posición">
							</div>

							<div class="col-sm-10 mx-auto">
								<label><strong>Teléfono:</strong></label>
								<input type="text" id="telefono_emp" name="telefono_emp" class="form-control form-control-sm" placeholder="Teléfono">
							</div>

							<div class="col-sm-10 mx-auto">
								<label><strong>Fecha Nacimiento:</strong></label>
								<input type="date" id="fecha_nac_emp" name="fecha_nac_emp" class="form-control form-control-sm" placeholder="Fecha Nacimiento">
							</div>

						</div>
					</div>


				</div>
				<div class="modal-footer ">
					<div class="mx-auto">
						<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal"><i class="fas fa-window-close"></i> <strong>Cerrar</strong></button>
						<button type="button" id="btn_guardar_emp" name="btn_guardar_emp" class="btn btn-warning btn-sm"><i class="far fa-save"></i> <strong>Guardar</strong></button>
						
					</form>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- Modal Agregar Empleado -->

<!-- Modal Editar Empleado -->
<div class="modal fade" id="EditarEmpleado" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-pencil-alt"></i> Editar Empleado</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form enctype="multipart/form-data" id="frmEditarEmp">

					<div class="text-center">
						<label><strong>Foto</strong></label>
						<div class="fileUpload btn btn-secondary btn-sm" >
							<span>Examinar... <i class="fas fa-cloud-upload-alt"></i></span>
							<input type="file" class="upload" id="file-upload-Editar-Emp" />
						</div>
					</div>

					<div class="text-center" id="file-preview-zone-Editar-Emp">
						<img id="fotoEmp" class="rounded-circle"  width="150" height="150" src="">

					</div>

					<div class="row">
						<div class="col">
							<div class="col-sm-10 mx-auto">
								<label><strong>Identificador Empleado:</strong></label>
								<input type="text" id="idEmp" disabled="" class="form-control form-control-sm" placeholder="Identificador Empleado">
							</div>

							<div class="col-sm-10 mx-auto">
								<label><strong>Nombre:</strong></label>
								<input type="text" id="nombre_empU" name="nombre_empU" class="form-control form-control-sm" placeholder="Nombre">
							</div>

							<div class="col-sm-10 mx-auto">
								<label><strong>Apellido:</strong></label>
								<input type="text" id="apellido_empU" name="apellido_empU" class="form-control form-control-sm" placeholder="Apellido">
							</div>

							<div class="col-sm-10 mx-auto">
								<label><strong>Departamento:</strong></label>
								<select class="form-control form-control-sm" id="select_dep_empU" name="select_dep_empU">
									<option selected>-Seleccione-</option>
									<option>Dirección</option>
									<option>Contabilidad y Adm</option>
									<option>Creditos y Cobros</option>
									<option>Tecnología</option>
									<option>Capacitación</option>
								</select>
							</div>

							<div class="col-sm-10 mx-auto">
								<label><strong>Correo Electrónico:</strong></label>
								<input type="text" id="correo_empU" name="correo_empU" class="form-control form-control-sm" placeholder="Correo Electrónico">
							</div>

							<div class="col-sm-10 mx-auto">
								<label><strong>Dirección:</strong></label>
								<input type="text" id="direccion_empU" name="direccion_empU" class="form-control form-control-sm" placeholder="Dirección">
							</div>

							<div class="col-sm-10 mx-auto">
								<label><strong>Género:</strong></label>
								<select class="form-control form-control-sm" id="select_emp_generoU" name="select_emp_generoU">
									<option selected>-Seleccione-</option>
									<option>Masculino</option>
									<option>Femenino</option>
								</select>
							</div>

							<div class="col-sm-10 mx-auto">
								<label><strong>Posición:</strong></label>
								<input type="text" id="posicion_empU" name="posicion_empU" class="form-control form-control-sm" placeholder="Posición">
							</div>

							<div class="col-sm-10 mx-auto">
								<label><strong>Teléfono:</strong></label>
								<input type="text" id="telefono_empU" name="telefono_empU"  class="form-control form-control-sm" placeholder="Teléfono">
							</div>

						</div>

						<div class="col">

							<div class="col-sm-10 mx-auto">
								<label><strong>Fecha Nacimiento:</strong></label>
								<input type="date" id="fecha_nac_empU" name="fecha_nac_empU" class="form-control form-control-sm" placeholder="Fecha Nacimiento">
							</div>

							<div class="col-sm-10 mx-auto">
								<label><strong>Fecha Creación:</strong></label>
								<input type="date" id="fecha_cre_empU" name="fecha_cre_empU" disabled="" class="form-control form-control-sm" placeholder="Fecha Creación">
							</div>

							<div class="col-sm-10 mx-auto">
								<label><strong>Hora Creación:</strong></label>
								<input type="text" id="horaCre" name="horaCre" disabled="" class="form-control form-control-sm" placeholder="Hora Creación">
							</div>

							<div class="col-sm-10 mx-auto">
								<label><strong>Usuario Creador:</strong></label>
								<input type="text" id="usuCre" name="usuCre" disabled="" class="form-control form-control-sm" placeholder="Usuario Creador">
							</div>

							<div class="col-sm-10 mx-auto">
								<label><strong>Usuario Modificador:</strong></label>
								<input type="text" id="usuMod" name="usuMod" disabled="" class="form-control form-control-sm" placeholder="Usuario Modificador">
							</div>

							<div class="col-sm-10 mx-auto">
								<label><strong>Fecha Modificación:</strong></label>
								<input type="text" id="fecha_mod_empU" name="fecha_mod_empU" disabled="" class="form-control form-control-sm" placeholder="Fecha Modificación">
							</div>

							<div class="col-sm-10 mx-auto">
								<label><strong>Hora Modificación:</strong></label>
								<input type="text" id="horaMod" name="horaMod" disabled="" class="form-control form-control-sm" placeholder="Hora Modificación">
							</div>

							<div class="col-sm-10 mx-auto">
								<label><strong>Estado:</strong></label>
								<select class="form-control form-control-sm" id="estado_emp" name="estado_emp">
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
<!-- Modal Editar Empleado -->
</body>
</html>