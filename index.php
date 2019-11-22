	<!DOCTYPE html>
	<html>
	<head>
		<title>Intranet</title>
		<!-- #0b8793 -->

		<link rel="icon" href="Imagenes/colibri.png" type="image/ico">
		<link rel="stylesheet" type="text/css" href="CSS/login.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="CSS/navBarLogin.css" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="Librerias/bootstrap-4.3.1/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="Librerias/fontawesome-free/css/all.min.css">

		<script src="Librerias/jquery-3.3.1.min.js"></script>
		<script src="Librerias/sweetalert.min.js"></script>
		<script src="JS/usuarios.js"></script>

	</head>
	<body style="background-color: #000046">
		<?php include "Vistas/navBarLogin.php" ?>
		<br>
		<div class="container">
			<div class="col-md-4 mx-auto">
				<div id="cajalogin" class="card mx-auto" >
					<div class="text-center">
						<img id="colibri" src="Imagenes/colibri.png"  class="card-img-top" alt="...">
					</div>

					<h5 id="nombre" class="text-center"><strong><i class="fas fa-globe"></i> INTRANET</strong></h5>
					<div class="card-body">
						<!-- Login -->
						<form class="form" role="form" id="formLogin" >
							<div class="form-group">
								<i class="fas fa-user icono"></i>
								<input type="text" placeholder="Usuario" class="form-control form-control-lg rounded" name="usuari" id="usuari" required="" autocomplete="user-name" >
							</div>
							<div class="form-group">
								<i class="fas fa-lock icono"></i>
								<input type="password" placeholder="Contraseña" class="form-control form-control-lg rounded" id="pwd" name="pwd" required="" autocomplete="new-password" >
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-info btn-sm" id="btnLoginn"><i class="fas fa-sign-in-alt fa-2x"></i></button>
							</div>
						</form>
						<!-- Login -->
					</div>
				</div>
			</div>
		</div>

	</body>
	</html>