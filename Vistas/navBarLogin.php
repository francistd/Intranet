
<!-- As a heading -->
<nav class="navbar navbar-light bg-light">
	<img src="Imagenes/LC.png" width="250">
	<!-- Pruebaaa -->
	<?php
	// Función para obtener la IP del usuario
	function get_ip_address() {

		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {

			$ip = $_SERVER['HTTP_CLIENT_IP'];

		} else {

			if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {

				$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];

			} else {

				$ip = $_SERVER['REMOTE_ADDR'];
			}
		}
		return $ip;
	}
	echo "<div class='text-left'><p id='infor'><i class='fas fa-map-marker-alt'></i><strong> ".get_ip_address()."</strong></p>" ;
	echo "<p id='infor'><i class='fas fa-desktop'></i><strong> ".gethostbyaddr($_SERVER['REMOTE_ADDR'])."</strong></p></div>";

	?>
	<!-- Pruebaaa -->
</nav>

