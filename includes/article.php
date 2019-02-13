<?php
$conexion = mysqli_connect("localhost", "root", "juanito", "shop");

if (!$conexion) {
	die("Error al intentar conectar con base de datos");
}

$query = mysqli_query($conexion, "SELECT * FROM producto");

while ($data = mysqli_fetch_assoc($query)) {
	echo '<div class="content_article">
			<div class="image_article"><img src="../images/article/'.$data['Imagen'].'"></div>
			<div class="name_article">'.$data['Nombre'].'</div>
			<div class="price_article">'.$data['Precio'].'</div>
			<div class="detail_article">Detalles</div>
		</div>';
}
?>