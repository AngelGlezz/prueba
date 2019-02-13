<?php
	$conexion = mysqli_connect("localhost", "root", "juanito", "shop");

	if (!$conexion) {
		die("Error al intentar conectar con base de datos");
	}
?>