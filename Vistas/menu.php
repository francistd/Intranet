<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php session_start(); require_once "dependencias.php"; ?> <!-- #0b8793 -->
</head>
<body style="background-color: #000046">
	
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-info">
		
		<a class="navbar-brand" href="inicio.php"><img src="../Imagenes/colibri.png" width="45" height="45"> Intranet</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class=" collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto ">
				<li class="nav-item active">
					<a class="nav-link" href="eventos.php"><i class="far fa-calendar-alt"></i> Eventos <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="noticias.php"><i class="far fa-newspaper"></i> Noticias <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="departamentos.php"><i class="far fa-building"></i> Departamentos</a>
				</li>
				<li class="nav-item dropdown active">

					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-user-tie"></i> Empleados
					</a>

					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="empleados.php"><i class="fas fa-user-tie"></i> Empleado</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="directorio.php"><i class="fas fa-phone-square-alt"></i> Directorio</a>
						
						<!-- Submenu Vacaciones -->
						<div class="dropdown-divider"></div>

						<div class="dropright">
							<a href="#" class="dropdown-item dropdown-toggle" data-toggle="dropdown"><i class="fas fa-route"></i> Vacaciones</a>


							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="solicitudVacaciones.php"><i class="fas fa-route"></i> Solicitud Vacaciones</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="administrarVacaciones.php"><i class="fas fa-cog"></i> Administrar Vacaciones</a>
								
							</div>
						</div>
						<!-- Submenu Vacaciones-->

						<!-- Submenu Cartas -->
						<div class="dropdown-divider"></div>

						<div class="dropright">
							<a href="#" class="dropdown-item dropdown-toggle" data-toggle="dropdown"><i class="far fa-envelope"></i> Cartas</a>


							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="solicitudCartas.php"><i class="far fa-envelope"></i> Solicitud Cartas</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="administrarCartas.php"><i class="fas fa-cog"></i> Administrar Cartas</a>
								
							</div>
						</div>
						<!-- Submenu Cartas -->
					</div>
				</li>
				<li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-users"></i> Usuarios
					</a>
					<div class=" dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="crearUsuario.php"><i class="fas fa-user-plus"></i> Crear Usuario</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="permisoUsuario.php"><i class="fas fa-user-shield"></i> Permisos de Usuario</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="cambiarContraseña.php"><i class="fas fa-key"></i> Cambiar Contraseña</a>
					</div>
				</li>
				
				<li class="nav-item dropdown active">

					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-tools"></i> Herramientas
					</a>

					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" target="_blank" href="http://10.1.10.91:8080/FonTicket/index.php"><i class="fas fa-cogs"></i> FonTicket</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="reportes.php"><i class="fas fa-chart-line"></i> Reportes</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="lema.php"><i class="fas fa-book-open"></i> Lema</a>

						<!-- Submenu -->
						<div class="dropdown-divider"></div>

						<div class="dropright">
							<a href="#" class="dropdown-item dropdown-toggle" data-toggle="dropdown"><i class="fas fa-shopping-bag"></i> Orden de Compras</a>


							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class=" dropdown-item" href="solicitudCompras.php"><i class="fas fa-cart-arrow-down"></i> Solicitud de Compras</a>
								<div class="dropdown-divider"></div>
								<a class=" dropdown-item"  href="administrarOrdenes.php"><i class="fas fa-cog"></i> Administrar Ordenes</a>
							</div>
						</div>
						<!-- Submenu -->

					</div>
				</li>
				
			
				
				<li class="nav-item active">
					<a class="nav-link" href="documentos.php"><i class="far fa-file-alt"></i> Documentos</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="galeria.php"><i class="fas fa-palette"></i> Galeria</a>
				</li>
				
			</ul>

			<ul class="menu navbar-nav ml-auto nav-flex-icons">
				
				<li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  <?php echo $_SESSION['nombre']." ".$_SESSION['apellido']; ?>
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="perfil.php"><i class="far fa-id-card"></i> Perfil</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="contraseña.php"><i class="fas fa-key"></i> Contraseña</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="salir.php"><i class="fas fa-sign-out-alt"></i> Salir</a>
						
					</div>
				</li>
				<li class="nav-item avatar">
					<a class="nav-link p-0" href="#">
						<img src="../Imagenes/log.jpg" class="rounded-circle z-depth-0" alt="avatar image" height="45">
					</a>
				</li>
			</ul>

		</div>
	</nav>


</body>
</html>