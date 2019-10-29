<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require_once "dependencias.php"; ?> <!-- #0b8793 -->
</head>
<body style="background-color: #000046">
	
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-info">
		<a class="navbar-brand" href="inicio.php">Intranet</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class=" collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#"><i class="fas fa-university"></i> Institucion <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="noticias.php"><i class="far fa-newspaper"></i> Noticias <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="departamentos.php"><i class="far fa-building"></i> Departamentos</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="documentos.php"><i class="far fa-file-alt"></i> Documentos</a>
				</li>
				<li class="nav-item dropdown active">

					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-user-tie"></i> Empleados
					</a>

					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="empleados.php"><i class="fas fa-user-tie"></i> Empleado</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="directorio.php"><i class="fas fa-phone-square-alt"></i> Directorio</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#"><i class="fas fa-birthday-cake"></i> Cumpleaños</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="solicitudVacaciones.php"><i class="fas fa-road"></i> Solicitud Vacaciones</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="solicitudCartas.php"><i class="fas fa-mail-bulk"></i> Solicitud Cartas</a>
					</div>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="galeria.php"><i class="fas fa-palette"></i> Galeria</a>
				</li>
				<li class="nav-item dropdown active">

					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-tools"></i> Herramientas
					</a>

					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" target="_blank" href="http://10.1.10.91:8080/FonTicket/index.php"><i class="fas fa-cogs"></i> FonTicket</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="solicitudCompras.php"><i class="fas fa-cart-arrow-down"></i> Solicitud de Compras</a>
						<!-- Prueba -->
						

						<!-- Prueba -->
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#"><i class="fas fa-chart-line"></i> Reportes</a>
					</div>
				</li>

				<li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<i class="fas fa-users"></i> Usuarios
					</a>
					<div class=" dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#"><i class="fas fa-user-plus"></i> Crear Usuario</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#"><i class="fas fa-user-shield"></i> Permisos de Usuario</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#"><i class="fas fa-key"></i> Cambiar Contraseña</a>
					</div>
				</li>
				
			</ul>

			<ul class="menu navbar-nav ml-auto nav-flex-icons">
				
				<li class="nav-item dropdown active">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Juan Tavarez
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#"><i class="far fa-id-card"></i> Perfil</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#"><i class="fas fa-key"></i> Contraseña</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Salir</a>
						
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